<?php
namespace  App\Exceptions;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

trait ExceptionTrait
{
    public function apiException($request,$e){
        if($this->isModel($e)){
            return $this->ModelResponse($e);
        }

        if($this->isHttp($e)) {
            return $this->HttpResponse($e);
        }

    }

    private function ModelResponse($e){
        return response()->json([
            'errors' => 'Model not found'
        ],Response::HTTP_NOT_FOUND);
    }
    private function HttpResponse($e){
        return response()->json([
            'errors' => 'Incorrect route'
        ],Response::HTTP_NOT_FOUND);
    }

    private function isHttp($e){
        return $e instanceof NotFoundHttpException;
    }
    private function isModel($e){
        return $e instanceof ModelNotFoundException;
    }


}