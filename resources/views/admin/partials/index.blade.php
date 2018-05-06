<div class="container ">
    <div class="row ">
        <div class="global-layout">
        <div class="template-container">
            @include('admin.partials.header')

           @yield('inner-content')

            @include('admin.partials.footer')
        </div>
        </div>
    </div>
</div>


<style>

    .global-layout {
        display: flex;
        justify-content: center;

    }
    .template-container{
        display: flex;
        flex-direction : column;
        align-content: space-around;
        width:70%;
    }
    h3{
        text-align: center;
    }
    .title{
        color: #00acc1;
        font-weight: bold;
    }

</style>