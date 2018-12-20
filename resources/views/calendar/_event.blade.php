<head>
    <link href='/css/events.css' rel='stylesheet'>
</head>
<div class='event'>
    <div class='eventContainer'>
        <h3 class='row1col1'>{{ $event->title }}</h3>
        <p class='row2col1'>{{ $event->description }}</p>
        <p class='row3col1'><span>Starting: </span> {{ $event->start_date }}
        <p class='row4col1'><span>Ending: </span> {{ $event->end_date }}
        <ul class='crudList row5col1'>
            <li class='row6col1'><a href="/user-profile/{{ $event->id }}">View</a></li>
            <li class='row6col2'><a href="/user-profile/{{ $event->id }}/edit" class="btn btn-default">Edit</a></li>
            <li class='row6col3'><a href="/user-profile/{{ $event->id }}/delete" class="btn btn-default">Delete</a></li>
        </ul>
    </div>


</div>