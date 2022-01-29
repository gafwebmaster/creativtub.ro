<div class="left-sidebar">
    <h2>Categorii</h2>
    <div class="panel-group category-products" id="accordian">
     
        @foreach ($category as $categories)
            
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordian" href="#{{$categories->category_name}}">
                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                    {{$categories->category_name}}
                    </a>
                </h4>
            </div>
            <div id="{{$categories->category_name}}" class="panel-collapse collapse">
                <div class="panel-body">
                    <ul> 
                        @foreach ($categories->subcategories as $subcategory)                                       
                            <li><a href="/{{Str::slug($categories->category_name)}}/{{Str::slug($subcategory->subcategory_name)}}/{{$subcategory->id}}">{{$subcategory->subcategory_name}}</a></li>                            
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        @endforeach    
    </div>
</div>