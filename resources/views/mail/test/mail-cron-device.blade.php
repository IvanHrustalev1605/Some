<meta charset="UTF-8">

<div>Не оплачено!</div>
@foreach ($DeviceAll as $device)
   @foreach ($device as $key => $el)
   <div>Объект: {{ $key }}, номер: {{ $el }}</div>
   @endforeach
@endforeach


