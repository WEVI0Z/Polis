@vite("resources/js/app/alerts.js")

@if (session("success"))
    <p hidden>{{$message = session("success")}}</p>
    @include("app.alert")
@endif