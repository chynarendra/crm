<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\API\AppUser;
use App\Models\ClientDetail;
use App\Models\DailySalesReport;
use App\Repository\dailySalesReport\DailySalesReportInterface;
use App\Repository\dailySalesReport\DailySalesReportInterfaceRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use League\Flysystem\Exception;

class DailySalesReportController extends Controller
{
    //

    /**
     * @var DailySalesReportInterface
     */
    private $dailySalesReportInterface;
    /**
     * @var DailySalesReportInterfaceRepository
     */
    private $dailySalesReportInterfaceRepository;

    public function __construct(DailySalesReportInterfaceRepository $dailySalesReportInterfaceRepository)
    {
        $this->dailySalesReportInterfaceRepository = $dailySalesReportInterfaceRepository;
    }

    public function getSalesPersonDetail($id){
        $responseBase = new ApiResponse();
        $salesData=$this->dailySalesReportInterfaceRepository->getSalesPersonDetail($id);

        if ($salesData) {
            $responseBase->success = true;
            $responseBase->status_code = 200;
            $responseBase->data = $salesData;
            return response()->json($responseBase);
        } else {
            $responseBase->status_code = 404;
            $responseBase->message = "Data Not Found";
            return response()->json($responseBase);

        }
    }

    public function getLatestSalesPersonDetail($id,$pageSize){
        $responseBase = new ApiResponse();
        $salesData=$this->dailySalesReportInterfaceRepository->getLatestSalesPersonDetail($id,$pageSize);

        if ($salesData) {
            $responseBase->success = true;
            $responseBase->status_code = 200;
            $responseBase->data = $salesData;
            return response()->json($responseBase);
        } else {
            $responseBase->status_code = 404;
            $responseBase->message = "Data Not Found";
            return response()->json($responseBase);

        }
    }

    public function getClientData($id){
        $responseBase = new ApiResponse();
        $clientData=$this->dailySalesReportInterfaceRepository->getClientDataBySales($id);
        if(sizeof($clientData) >0){
            foreach ($clientData as $client){
                $client->address= $client->address ==null?'':$client->address;
                $client->contact_no= $client->contact_no ==null?'':$client->contact_no;
                $client->no= $client->no ==null?'':$client->no;
                $client->tds= $client->tds ==null?'':$client->tds;
                $client->remarks= $client->remarks ==null?'':$client->remarks;
                $client->next_date_of_visit= $client->next_date_of_visit ==null?'':$client->next_date_of_visit;
            }
        }

        $responseBase->success = true;
        $responseBase->status_code = 200;
        $responseBase->data = $clientData;
        return response()->json($responseBase);
    }

    public function getClientDetail($id){

        $responseBase = new ApiResponse();
        $clientDetail=$this->dailySalesReportInterfaceRepository->getClientDetail($id);
        if ($clientDetail) {
            $clientDetail->address= $clientDetail->address ==null?'':$clientDetail->address;
            $clientDetail->contact_no= $clientDetail->contact_no ==null?'':$clientDetail->contact_no;
            $clientDetail->no= $clientDetail->no ==null?'':$clientDetail->no;
            $clientDetail->tds= $clientDetail->tds ==null?'':$clientDetail->tds;
            $clientDetail->remarks= $clientDetail->remarks ==null?'':$clientDetail->remarks;
            $clientDetail->next_date_of_visit= $clientDetail->next_date_of_visit !=null?'':$clientDetail->next_date_of_visit;

            $responseBase->success = true;
            $responseBase->status_code = 200;
            $responseBase->data = $clientDetail;
            return response()->json($responseBase);
        } else {
            $responseBase->status_code = 404;
            $responseBase->message = "Data Not Found";
            return response()->json($responseBase);
        }
    }

    public function storeSalesPersonDetail(Request $request){

        try {

            $responseBase = new ApiResponse();
            $validator = Validator::make($request->all(), [
                'app_user_id'=>'required',
                'visited_by' => 'required',
                'visited_area' => 'required',
                'field_visit_date' => 'required'
            ]);
            if ($validator->fails()) {
                return response()->json(["status" => false, "status_code" => 422, "message" => $validator->errors()->all()], 422);
            }
            $appUserId=(int)filter_var($request->app_user_id, FILTER_SANITIZE_NUMBER_INT);
            $row = [
                'app_user_id' => $appUserId,
                'visited_by' => $request->visited_by,
                'visited_area' => $request->visited_area,
                'serial_number' => $request->serial_number,
                'field_visit_date' => $request->field_visit_date,
            ];
            $salesData= DailySalesReport::create($row);
            if ($salesData) {
                $responseBase->success = true;
                $responseBase->status_code = 200;
                $responseBase->message = "Successfully data added";
                return response()->json($responseBase);
            }

        }catch (Exception $exception){
            $responseBase->status_code = 404;
            $responseBase->message = "Something is wrong";
            return response()->json($responseBase,404);
        }

    }

    public function storeSalesAreaDetailWithResponse(Request $request){

        try {

            $responseBase = new ApiResponse();
            $validator = Validator::make($request->all(), [
                'app_user_id'=>'required',
                'visited_by' => 'required',
                'visited_area' => 'required',
                'field_visit_date' => 'required'
            ]);
            if ($validator->fails()) {
                return response()->json(["status" => false, "status_code" => 422, "message" => $validator->errors()->all()], 422);
            }
            $appUserId=(int)filter_var($request->app_user_id, FILTER_SANITIZE_NUMBER_INT);
            $row = [
                'app_user_id' => $appUserId,
                'visited_by' => $request->visited_by,
                'visited_area' => $request->visited_area,
                'serial_number' => $request->serial_number,
                'field_visit_date' => $request->field_visit_date,
            ];
            $salesData= DailySalesReport::create($row);
            if ($salesData) {
                $responseBase->success = true;
                $responseBase->status_code = 200;
                $responseBase->data = $salesData;
                return response()->json($responseBase);
            }

        }catch (Exception $exception){
            $responseBase->status_code = 404;
            $responseBase->message = "Something is wrong";
            return response()->json($responseBase,404);
        }

    }

    public function storeClientDetail(Request $request){

        try {

            $responseBase = new ApiResponse();
            $validator = Validator::make($request->all(), [
                'sales_report_id' => 'required',
                'name' => 'required',
                'status_id' => 'required'
            ]);
            if ($validator->fails()) {
                return response()->json(["status" => false, "status_code" => 422, "message" => $validator->errors()->all()], 422);
            }
            $salesReportId=(int)filter_var($request->sales_report_id, FILTER_SANITIZE_NUMBER_INT);
            $row = [
                'sales_report_id' => $salesReportId,
                'name' => $request->name,
                'address' => $request->address,
                'contact_no' => $request->contact_no,
                'no' => $request->no,
                'tds' => $request->tds,
                'status_id' => $request->status_id,
                'remarks' => $request->remarks,
                'next_date_of_visit' => $request->next_date_of_visit,
            ];
            $salesData= ClientDetail::create($row);
            if ($salesData) {
                $responseBase->success = true;
                $responseBase->status_code = 200;
                $responseBase->message = "Successfully data added";
                return response()->json($responseBase);
            }

        }catch (Exception $exception){
            $responseBase->status_code = 404;
            $responseBase->message = "Something is wrong";
            return response()->json($responseBase,404);
        }

    }
}
