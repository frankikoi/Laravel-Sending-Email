<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Style Links -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/all.min.css">
    <!-- End of Style Links -->

    <title>Contact Us</title>
</head>

<body>
    <!-- First Section -->
    <section class='contact-us'>
        <div class="title">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui nulla consectetur culpa aut enim similique,
                itaque nesciunt, laborum soluta iure a velit quisquam natus provident. Minus labore sunt officiis
                voluptas.</p>
        </div>

        <div class="container">
            <!-- Contact Info -->
            <div class="contact-info">
                <div class="container-box">
                    <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                    <div class="text">
                        <h3> Address </h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="container-box">
                    <div class="icon"><i class="fa-solid fa-at"></i></div>
                    <div class="text">
                        <h3> Email </h3>
                        <p>example-email@email.com</p>
                    </div>
                </div>
                <div class="container-box">
                    <div class="icon"><i class="fa-solid fa-phone"></i></div>
                    <div class="text">
                        <h3> Phone </h3>
                        <p>+63912345678</p>
                    </div>
                </div>
            </div>
            <!-- End of Contact Info -->

            <!-- Contact Form -->
            <div class="contactForm">
            <form action="{{ route('store') }}" method="POST" id="insert_contact_form" enctype="multipart/form-data">
                    <h2>Send us a Message</h2>
                    @csrf
                    <div class="row">
                        <div class="inputBox">
                            <input type="text" name="fname" required>
                            <span>First Name</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="lname" required>
                            <span>Last Name</span>
                        </div>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="email" required>
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea name="message" required></textarea>
                        <span>Type your message here...</span>
                    </div>
                    <div class="inputBox">
                        <button type="submit" id="insert_clientForm_btn"> Send </button>
                    </div>
                </form>
            </div>
            <!-- End of Contact Form -->
        </div>
    </section>

    <!-- End of First Section -->

    <!-- Jquery Link -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <!-- Sweet alert link -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- JavaScripts -->

    <script>
        $(function() {

            // Inserting to Database
            $('#insert_contact_form').submit(function(e){
                e.preventDefault();
                const formData = new FormData(this);
                
                $('#insert_clientForm_btn').text('Sending...');

                $.ajax({
                    url: '{{ route('store') }}',
                    method: 'POST',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                
                    success: function (response) {
                        if(response.status == 200) {
                            Swal.fire({
                                title: "Success!",
                                text: "Your Message was sent!",
                                icon: "success",
                            })
                        }
                        $("#insert_clientForm_btn").text('Send');
                        $("#insert_contact_form")[0].reset();
                    }
                });
            });

        });
    </script>
</body>

</html>