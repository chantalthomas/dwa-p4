<div class='event'>
    <div class='eventContainer'>
        <h3>{{ $event->title }}</h3>
        <p>{{ $event->description }}</p>
        <p><span>Starting: </span> {{ $event->start_date }}
        <p><span>Ending: </span> {{ $event->end_date }}
        <ul class='crudList'>
            <li><a href="/user-profile/{{ $event->id }}">View</a></li>
            <li><a href="/user-profile/{{ $event->id }}/edit" class="btn btn-default">Edit</a></li>
            <li><a href="/user-profile/{{ $event->id }}/delete" class="btn btn-default">Delete</a></li>
        </ul>
    </div>


</div>