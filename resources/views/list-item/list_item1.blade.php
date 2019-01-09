<li class="">
    <div class="card">
        <div class="card-block">
            <div class="media">
                <a class="mr-3"
                   href="{{route("comic",["comicId"=>$value["ComicID"],"comicName"=>$value["ComicName"]])}}">
                    <img class=""
                         src="{{$value["Thumbnail"]}}"
                         alt="Generic placeholder image"
                         style="width: 70px;height: 100px"
                    >
                </a>
                <div class="media-body">
                    <div>
                        <a href="{{route("comic",["comicId"=>$value["ComicID"],"comicName"=>$value["ComicName"]])}}">
                            <h6 class="d-inline-block">{{$value["ComicName"]}}</h6>
                        </a>
                    </div>
                    <p>{{$value["Description"]}}</p>
                </div>
            </div>
        </div>
    </div>
</li>

