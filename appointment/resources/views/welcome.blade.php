<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
        
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
            body { font-family: 'Nunito', sans-serif; } label.radio-inline { position: relative; margin-left: 10px; } .input-group input[type="radio"] { opacity: 0; margin: 0; padding: 0; position: absolute; left: 0; right: 0; top: 0; bottom: 0; width: initial; height: initial; z-index: 1; width: 100%; height: 100%; cursor: pointer; } .input-group input[type="radio"]+label {
                    position: relative; padding: 0 12px; border: 0; height: 40px; line-height: 40px; min-width: 70px; text-align: center; cursor: pointer; border-radius: 4px; color: #000000; background: #dfe0df; font-size: 14px; } .input-group input[type="radio"]:checked+label { color: #ffffff; background: green; font-weight: 600; margin: 0; } .modal-backdrop { position: fixed; top: 0; left: 0; z-index: 1040;  width: 100vw; height: 100vh; background-color: #0c0a0a;  opacity: 0.5; } .input-group input[type="radio"]:disabled+label { color: #ffffff; background: #ef4836; font-weight: 600; margin: 0;}            
        </style>
        
        
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1" style="padding:20px; min-width:800px;">
                        @include('errors')
                        <h3>Appointment Form</h3><br>
                        <div class="form-group">
                            <label for="doctor_id">Doctor ID</label> 
                            <select class="form-control" id="doctor_id" >
                                <option value=""> Select Doctor ID </option>
                                @foreach($doctorlist as $key => $value)
                                    <option value="{{$value->doctor_id}}" 
                                    data-duration="{{$value->duration}}"
                                    data-start-time="{{$value->start_time}}"
                                    data-end-time="{{$value->end_time}}" 
                                    <?php if(old('doctor_id') == $value->doctor_id) { echo 'selected'; } ?> >{{$value->doctor_id}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('doctor_id'))
                                <span class="form-validation-error">
                                    {{ $errors->first('doctor_id') }}
                                </span>
                            @endif
                        </div>
                        <span  id="available_slots"></span>
                    </div>
                </div>                
            </div>
        </div>
        <div id="myModal" class="modal " role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Patient Details</h4>
                    </div>
                    <div class="modal-body">
                        <form id="appointmentForm" method="post" action="{{url('/appointment')}}">
                            {{ csrf_field() }}
                            <input type="hidden" value=""  name="doctor_id" id="doctor_id_h">
                            <input type="hidden" value=""  name="appointment_time" id="appointment_time_h"> 
                            <div class="form-group">
                                <label for="patient_name">Patient Name</label> 
                                <input type="text" class="form-control" id="patient_name" name="patient_name" placeholder="Patient Name" value="{{ old('patient_name') }}" require>                                
                                @if ($errors->has('patient_name'))
                                    <span class="form-validation-error">
                                        {{ $errors->first('patient_name') }}
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label> 
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}" require>                                
                                @if ($errors->has('email'))
                                    <span class="form-validation-error">
                                        {{ $errors->first('email') }}
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label> 
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="{{ old('phone') }}" require>                                
                                @if ($errors->has('phone'))
                                    <span class="form-validation-error">
                                        {{ $errors->first('phone') }}
                                    </span>
                                @endif
                            </div>                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="appointmentFormButton" class="btn btn-primary">Submit</button> 
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script>
            $('#doctor_id').on('change', function (e) {
                var doctor_id = this.value;
                var duration = $(this).find(':selected').attr('data-duration');
                var start_time = $(this).find(':selected').attr('data-start-time');
                var end_time = $(this).find(':selected').attr('data-end-time');
                var url = "{{ url('available_slots') }}";
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        '_token': '{{ csrf_token() }}',
                        'doctor_id': doctor_id,
                        'duration': duration,
                        'start_time': start_time,
                        'end_time': end_time,
                    },
                    success: function (res)
                    {
                        $("#available_slots").html(res);                        
                        
                        console.log(res);
                    },
                    error: function (data) {
                        return false;
                    }
                });
            });

            $('#appointmentFormButton').click(function() {
                $('#appointmentForm').submit();
            });

            function showappointmentform(val)
                {
                    var doctor_id = $("#doctor_id").val();
                    $("#appointment_time_h").val(val);
                    $("#doctor_id_h").val(doctor_id);
                    $('#myModal').modal('show');
                }
            $('.close').click(function() {
                $('.alert').hide();
            });
    </script>
</html>
