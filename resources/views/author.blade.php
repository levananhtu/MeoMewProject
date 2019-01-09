@extends("layout/index1")

@section("content")
    <div class="container" align="center">
        <ul class="list-view">
            <?php
            use Illuminate\Support\Facades\View;
            $comics = $values["comics"]->paginate(20);
            foreach ($comics as $comic) {
                $comic = $comic->toArray();
                $view = View::make('list-item/list_item1', ["value" => $comic]);
                $contents = $view->render();
                echo $contents;
            }
            ?>
        </ul>
        {{$comics->links()}}
    </div>
@endsection
