<div>
    <div>Name: <b>{{$name}}</b></div>
    @if (!empty($meta["father_name"]))
        <div>Father Name: <b>{{$meta["father_name"]}}</b></div>
    @endif
    <div>Mobile Number: <b>{{$mobile}}</b></div>
    <div>Email Address: <b>{{$email}}</b></div>
    <div>Country: {{$meta["country"]}}</div>
    @if (!empty($meta["city"]))
        <div>City: {{$meta["city"]}}</div>
    @endif
    @if (!empty($meta["address"]))
        <div>Address: {{$meta["address"]}}</div>
    @endif
    @if (!empty($meta["profession"]))
        <div>Candidate Profession: {{$meta["profession"]}}</div>
    @endif

    <hr>
    @if (!empty($meta["course"]))
        <div>Course: <b>{{$meta["course"]}}</b></div>
    @endif
    @if (!empty($meta["location"]))
        <div>Location : <b>{{$meta["location"]}}</b></div>
    @endif
    @if (!empty($meta["medium"]))
        <div>Mode of Learning : <b>{{$meta["medium"]}}</b></div>
    @endif
    @if (!empty($meta["time"]))
        <div>Time Preference : <b>{{$meta["time"]}}</b></div>
    @endif
    <div>
        <h3>Score Achieved in MCQs</h3>
        <p style="font-size: 22px;">{{$meta["score"]}} out of 50 </p>
        <p>Percentage: {{$meta["score"]/50 *100}} %</p>
    </div>
    <hr>
    <div style="margin-top: 20px;">
        <p>Text question 01 Answer (Describe the given picture in your own words)</p>
        @if(!empty($meta["q1"]))
            <p>{{$meta["q1"]}}</p>
        @else
            <p>Answer not given</p>
        @endif
    </div>
    <div style="margin-top: 20px;">
        <p>Text question 02 Answer (Write about a strong childhood memory...)</p>
        @if(!empty($meta["q2"]))
            <p>{{$meta["q2"]}}</p>
        @else
            <p>Answer not given</p>
        @endif
    </div>
</div>
