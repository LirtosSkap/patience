<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <script>window.Laravel = {csrfToken: '{{ csrf_token() }}'}</script>
    <meta name="_token" content="{{ csrf_token() }}"/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Laravel 5.3 with Vuejs</title>
</head>
<body>
{{--<div class="container" id='app'>--}}
    {{--{{ message }}--}}
    {{--<tasks></tasks>--}}
{{--</div>--}}
{{--<div id="app">--}}
    {{--<div id="watch-example">--}}
        {{--<p>--}}
            {{--Задайте вопрос, на который можно ответить "да" или "нет":--}}
            {{--<input v-model="question">--}}
        {{--</p>--}}
        {{--<p>{{ answer }}</p>--}}
    {{--</div>--}}
{{--</div>--}}
<section id="test">
    {{--<examle></examle>--}}

</section>
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
