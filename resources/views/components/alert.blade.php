@if(session('registerSuccess'))
    <div id="success-alert" class="alert alert-success alert-dismissible show" role="alert">
        {{session('registerSuccess')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <style>
        /* Custom styling for the alert to appear on the right side */
        #success-alert {
            position: fixed;
            top: 75px;
            right: 20px;
            z-index: 1050; /* Ensure the alert appears above other content */
            max-width: 300px; /* You can adjust this based on how wide you want it */
        }
    </style>

    <script>
        // Auto close the alert after 5 seconds
        setTimeout(function() {
            var alert = document.getElementById('success-alert');
            alert.style.display = 'none';
        }, 5000); // 5000 milliseconds = 5 seconds
    </script>
@endif
