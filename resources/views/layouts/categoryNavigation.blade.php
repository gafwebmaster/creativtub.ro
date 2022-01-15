<div class="left-sidebar">
    <h2>Categorii</h2>
    <div class="panel-group category-products" id="accordian">
        <!--category-productsr-->
        @foreach ($category as $categories)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordian" href="#{{$categories->denumire}}">
                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                    {{$categories->denumire}}
                    </a>
                </h4>
            </div>
            <div id="{{$categories->denumire}}" class="panel-collapse collapse">
                <div class="panel-body">
                    <ul>                                        
                        <li><a href="#">Suporti Lumanari</a></li>
                        <li><a href="#">Vaze Decorative</a></li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!--/category-products-->
</div>