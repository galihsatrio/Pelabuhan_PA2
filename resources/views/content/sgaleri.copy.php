@extends('layouts.web')
@section('title', 'Galeri | Pelabuhan Mulia Raja Napitupulu')
@section('breadcrumb', 'Galeri')
@section('judul', 'Galeri Pelabuhan')
@section('content')
  <div class="container">
      <div class="row">
        <div class="gallery">
           @foreach ($galeris as $galeri)
          <figure>
            <div class="row">
              <div class="col-lg-3">
                {{-- <img src="/foto/product/{{$galeri->image}}" alt="asw" /> --}}
                <img id="myImg" src="/foto/product/{{$galeri->image}}" alt="We use JavaScript to trigger the modal and to display the current image inside the modal when it is clicked on. Also note that we use the value from the image's alt attribute as an image caption text inside the modal." >
              </div>
            </div>
          </figure>
          <!-- The Modal -->
          <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
          </div>
          @endforeach
          
        </div>

        {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display: none">
          <symbol id="close" viewBox="0 0 18 18">
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              fill="#FFFFFF"
              d="M9,0.493C4.302,0.493,0.493,4.302,0.493,9S4.302,17.507,9,17.507
			S17.507,13.698,17.507,9S13.698,0.493,9,0.493z M12.491,11.491c0.292,0.296,0.292,0.773,0,1.068c-0.293,0.295-0.767,0.295-1.059,0
			l-2.435-2.457L6.564,12.56c-0.292,0.295-0.766,0.295-1.058,0c-0.292-0.295-0.292-0.772,0-1.068L7.94,9.035L5.435,6.507
			c-0.292-0.295-0.292-0.773,0-1.068c0.293-0.295,0.766-0.295,1.059,0l2.504,2.528l2.505-2.528c0.292-0.295,0.767-0.295,1.059,0
			s0.292,0.773,0,1.068l-2.505,2.528L12.491,11.491z"
            />
          </symbol>
        </svg>
        <script>
          popup = {
            init: function () {
              $("figure").click(function () {
                popup.open($(this));
              });

              $(document)
                .on("click", ".popup img", function () {
                  return false;
                })
                .on("click", ".popup", function () {
                  popup.close();
                });
            },
            open: function ($figure) {
              $(".gallery").addClass("pop");
              $popup = $('<div class="popup" />').appendTo($("body"));
              $fig = $figure.clone().appendTo($(".popup"));
              $bg = $('<div class="bg" />').appendTo($(".popup"));
              $close = $('<div class="close"><svg><use xlink:href="#close"></use></svg></div>').appendTo($fig);
              $shadow = $('<div class="shadow" />').appendTo($fig);
              src = $("img", $fig).attr("src");
              $shadow.css({ backgroundImage: "url(" + src + ")" });
              $bg.css({ backgroundImage: "url(" + src + ")" });
              setTimeout(function () {
                $(".popup").addClass("pop");
              }, 10);
            },
            close: function () {
              $(".gallery, .popup").removeClass("pop");
              setTimeout(function () {
                $(".popup").remove();
              }, 100);
            },
          };

          popup.init();
        </script> --}}
        <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
          modal.style.display = "none";
        }
        </script>

      </div>
    </div>
@endsection