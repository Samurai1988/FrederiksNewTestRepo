@extends('shopify-app::layouts.default')

@section('content')

<img class="" src="https://media-exp1.licdn.com/dms/image/C4D03AQHSeNurf99obg/profile-displayphoto-shrink_200_200/0?e=1599091200&v=beta&t=Sgc4ndG9icD5JZTHAF3n0PvWEHJrLF4oxYIH7wtz1Ms" alt="" width="1500" height="1600" />

@endsection

@section('scripts')
    @parent

    <script type="text/javascript">
        var AppBridge = window['app-bridge'];
        var actions = AppBridge.actions;
        var TitleBar = actions.TitleBar;
        var Button = actions.Button;
        var Redirect = actions.Redirect;
        var titleBarOptions = {
            title: 'Dashboard',
        };
        var myTitleBar = TitleBar.create(app, titleBarOptions);
    </script>

@endsection