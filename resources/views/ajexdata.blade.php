<div class="input-group">
    <label for="available_slots" style=" width: 100%;">Available Slots</label>                               
    @foreach($availability_time as $availability)
       <label class="radio-inline"><input type="radio"  name="appointment_time_radio" onclick="showappointmentform('{{$availability}}')" value="{{$availability}}" <?php if(in_array($availability, $already_booked)) { echo 'disabled'; } ?>><label>{{$availability}}</label></label>
    @endforeach
</div>