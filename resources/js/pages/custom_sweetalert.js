 $(document).ready(function()
            {
              const swalWithBootstrapButtons = swal.mixin({
        confirmButtonClass: 'btn btn-success mr-3',
        cancelButtonClass: 'btn btn-custom-light',
        buttonsStyling: false,
    });

                $("#basic").on('click',function()
                {
                    swalWithBootstrapButtons.fire(
                              'Good job!',
                              'You clicked the button!',
                              'success'
                            )
                });
                $("#simple").on('click',function()
                {
                    swalWithBootstrapButtons.fire('Any one can use a computer')
                });
                  $("#simple").on('click',function()
                {
                    swalWithBootstrapButtons.fire('Any one can use a computer')
                });

                  $("#description").on('click',function()
                {
                    swalWithBootstrapButtons.fire(
                        'Any one can use a computer',
                        'This is the description text')
                });
                   $("#questionalert").on('click',function()
                {

                  swalWithBootstrapButtons.fire(
                          'The Internet?',
                          'That thing is still around?',
                          'question'
                        )
                });
   $("#customposition").on('click',function()
                {
                   swalWithBootstrapButtons.fire({
                          position: 'top-end',
                          type: 'success',
                          title: 'Your work has been saved',
                          showConfirmButton: false,
                          timer: 1500
                        })
                   });
   $("#warningalert").on('click',function()
                {
                       swalWithBootstrapButtons.fire({
                      title: 'Are you sure?',
                      text: "You won't be able to revert this!",
                      type: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#727cf5',    
                      confirmButtonText: 'Yes, delete it!',
                      customClass: {
                        confirmButton: 'btn btn-primary',
                          cancelButton: 'btn btn-custom-light',

                        }
                    })
                });

    $("#htmlalert").on('click',function()
                {
                    swalWithBootstrapButtons.fire({
                                  title: '<strong>HTML Title !</strong>',
                                  html:
                                    'You can use <u><i>style</i></u> text',
                                  focusConfirm: true,
                            });
                });

     $("#customalert").on('click',function()
                {
                   swalWithBootstrapButtons.fire({
                              imageUrl: 'https://i.ibb.co/kMrXpmb/cup.jpg',
                              imageHeight: 100,
                              imageWidth: 100,
                              imageAlt: 'A tall image',
                              title: 'Are you sure?',
                      text: "Do you want to have it!",
                      showCancelButton: true,
                      showConfirmButton: true,

                      confirmButtonColor: '#727cf5',    
                      confirmButtonText: 'Yes',
                      cancelButtonText: 'No'
                            })
                });
        $("#animatealert").on('click',function()
                {
         swalWithBootstrapButtons.fire({
                      title: 'Custom animation with Animate.css',
                      animation: false,
                      customClass: {
                        popup: 'animated tada'
                      }
                    })
                  });

         $("#autoclose").on('click',function()
                {
                  let timerInterval
                  swalWithBootstrapButtons.fire({
                    title: 'Auto close alert!',
                    html: 'I will close in <strong></strong> seconds.',
                    timer: 2000,
                    onBeforeOpen: () => {
                      swalWithBootstrapButtons.showLoading()
                      timerInterval = setInterval(() => {
                        swalWithBootstrapButtons.getContent().querySelector('strong')
                          .textContent = Swal.getTimerLeft()
                      }, 100)
                    },
                    onClose: () => {
                      clearInterval(timerInterval)
                    }
                  }).then((result) => {
                    if (
                      // Read more about handling dismissals
                      result.dismiss === Swal.DismissReason.timer
                    ) {
                      console.log('I was closed by the timer')
                    }
                  })
            });

         $('#ajaxrequest').on('click', function() {
        swalWithBootstrapButtons.fire(
            {
                title: 'Ajax request example',
                text: 'Submit to run ajax request',
                type: 'info',
                showCancelButton: true,
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
            },
            function() {
                setTimeout(function() {
                    swalWithBootstrapButtons.fire('Ajax request finished!');
                }, 2000);
            }
        );
    });
         $('#Chaining').on('click', function() {

         swalWithBootstrapButtons.mixin({
  input: 'text',
  confirmButtonText: 'Next &rarr;',
  showCancelButton: true,
  progressSteps: ['1', '2', '3']
}).queue([
  {
    title: 'Question 1',
    text: 'Chaining swal2 modals is easy'
  },
  'Question 2',
  'Question 3'
]).then((result) => {
  if (result.value) {
    swalWithBootstrapButtons.fire({
      title: 'All done!',
      html:
        'Your answers: <pre><code>' +
          JSON.stringify(result.value) +
        '</code></pre>',
      confirmButtonText: 'Lovely!'
    })
  }
})
});

       });