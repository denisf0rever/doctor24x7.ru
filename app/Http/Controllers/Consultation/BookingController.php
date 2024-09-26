<?php

namespace App\Http\Controllers\Consultation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class BookingController extends Controller
{
    public function makeRequest(Request $request, $id)
    {
        // Вы можете делать что-то с $request и $id
        // Например, сохранять информацию о бронировании в базе данных

        // Пример логики, чтобы вернуть успешный ответ
        if ($request->isMethod('post')) {
            // Здесь можно обработать данные из запроса
            // Например, создать запись о бронировании

            return Response::json(['success' => true, 'message' => $request->all()]);
        }

        return Response::json(['success' => false, 'message' => 'Ошибка при создании бронирования.']);
    }
}