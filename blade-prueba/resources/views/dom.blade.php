@extends('layouts.app')
@section('content')
<body>
    <input type="text" id="clave">
    <button id="comprobar">Comprobar</button>
    <div id="resultado"></div>
    <script src="dom.js"></script>
</body>
</html>
@vite('resources/js/dom.js')
@endsection