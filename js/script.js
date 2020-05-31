$(document).ready(function(){

	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})


// Carousel index
        $('.carousel').carousel({
          interval: 2000
        })

//Smooth Scrooling
$(document).ready(function(){
            // membuat smooth scrolling
            $('.scroll').click(function(e){
                
                // ambil isi href
                var href = $(this).attr('href');
                console.log(href);
                // tangkap elemen 
                var elemenHref = $(href);

                $('body').animate({
                    scrollTop: elemenHref.offset().top
                    }, 1250, 'easeOutSine');

                e.preventDefault();
            })
        })


// create a tree
    $("#tree-data").jOrgChart({
        chartElement: $("#tree-view"), 
        nodeClicked: nodeClicked
    });
    // lighting a node in the selection
    function nodeClicked(node, type) {
        node = node || $(this);
        $('.jOrgChart .selected').removeClass('selected');
            node.addClass('selected');
        }

    function komentarMasuk(){
        alert("Komentar anda berhasil ditambahkan");
    }

})