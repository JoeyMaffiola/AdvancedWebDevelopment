use resourse\views\header.blade.php;
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
            <h3>Course Catalog</h3>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Select Subject
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                         foreach($subjects as $s) 
                            <li><a class="dropdown-item" href="{{url('/coursesbysubject', [$s->subject])}}">{{ $s->full_name }}</a></li>
                        
                        
                    </ul>
                </div>
                <h2>List of {{ $subject}} Courses</h2>
            
                <table class="table">
                    <thead>
                        <tr>
                            <th>Course</th>
                            <th>Title</th>
                            <th>Credits</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $c) 
                            <tr>
                                <td>{{ $c->subject }} {{ $c->number}}</td>
                                <td>{{ $c->title}}</td>
                                <td>{{$c->credits}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</body>