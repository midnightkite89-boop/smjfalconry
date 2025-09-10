$(document).ready(function() {

  
        //Wray Gallery - S.Wray 2014 - v1.4
        $('.wray-gal').each(function () {
            var self = $(this);

            //if has captions, add caption div
            if ($(self).hasClass('wray-caption')) {
                $(self).find('.wray-over img').before('<div><h2></h2></div>');
            }


            //each thumbnail loads 1 after another
            if ($(self).hasClass('wray-step')) {
                var page1 = function () {
                    var i = 0;

                    //sets opacity on thumbs to 0
                    var lis = $(self).find('.wray-thumbs img').css('opacity', '0');

                    //displays each thumbnail 1 by 1
                    (function displayimages() {
                        if (i < lis.length) {
                            lis.eq(i++).animate({
                                opacity: '1'
                            }, 500)

                            setTimeout(function () { displayimages(); }, 100)
                        }
                    })();
                }();
            }




            //set current item
            var currentItem = 0;

            var amountOfImg = $(self).find('.wray-thumbs img').length - 1;


            var containerHeight = $(self).parent().height();
            $(self).find('.wray-thumbs img').click(function () {
                containerHeight = $(self).parent().height();

                var imgIndex = $(this).index();
                currentItem = imgIndex;

                //gets image data source of clicked image
                var imgSrc = $(this).attr('data-source');

                //sets the image to the hidden overlay image
                $(self).find('.wray-over').children('img').attr("src", imgSrc);

                //if has captions, the add the caption to the caption div
                if ($(self).hasClass('wray-caption')) {
                    $(self).find('.wray-over').children('.wray-caption').html('');

                    var imgCaption = $(this).attr('alt');
                    $(self).find('h2').text(imgCaption);
                }


                //fades out the thumbnails then fades in the overlay image and nav
                $(self).find('.wray-thumbs').fadeOut(400, function () {
                    $(self).find('.wray-over').fadeIn(400, function () {
                        $(self).find('.wray-nav').fadeIn(400);
                    });

                });

            });



            //makes it work on key press
            $("body").keydown(function (e) {

                //copy of prev button
                if (e.which == 37) { // left     

                    //increments currentItem 1
                    if (currentItem === amountOfImg) {
                        currentItem = 0;
                    }

                    else {
                        currentItem++;
                    }


                    $(self).find('.wray-over img').fadeOut(300, function () {
                        var imgSrc = $(self).find('.wray-thumbs img').eq(currentItem).attr('data-source');

                        //sets it to the hidden overlay image
                        $(self).find('.wray-over img').attr("src", imgSrc);
                        //fades in new image
                        $(self).find('.wray-over img').fadeIn(300);

                    })

                    //change caption if it has one
                    if ($(self).hasClass('wray-caption')) {
                        $(self).find('.wray-over').children('.wray-caption').html('');

                        var imgCaption = $(self).find('.wray-thumbs img').eq(currentItem).attr('alt');
						$(self).find('h2').text(imgCaption);
						
                    }

                }

                    //copy of next button
                else if (e.which == 39) { // right     

                    //decreases currentItem by 1
                    if (currentItem === 0) {
                        currentItem = amountOfImg;
                    }

                    else {
                        currentItem--;
                    }

                    $(self).find('.wray-over img').fadeOut(400, function () {
                        var imgSrc = $(self).find('.wray-thumbs img').eq(currentItem).attr('data-source');

                        //sets it to the hidden overlay image
                        $(self).find('.wray-over img').attr("src", imgSrc);
                        //fades in new image
                        $(self).find('.wray-over img').fadeIn();

                    })

                    //changes caption if it has one
                    if ($(self).hasClass('wray-caption')) {
                        $(self).find('.wray-over').children('.wray-caption').html('');

                        var imgCaption = $(self).find('.wray-thumbs img').eq(currentItem).attr('alt');
                        $(self).find('h2').text(imgCaption);
                    }

                }

            });

            //click image to change to next
            $(self).find('.wray-over img').click(function () {
                //increments currentItem 1
                if (currentItem === amountOfImg) {
                    currentItem = 0;
                }

                else {
                    currentItem++;
                }


                $(self).find('.wray-over img').fadeOut(300, function () {
                    var imgSrc = $(self).find('.wray-thumbs img').eq(currentItem).attr('data-source');

                    //sets it to the hidden overlay image
                    $(self).find('.wray-over img').attr("src", imgSrc);
                    //fades in new image
                    $(self).find('.wray-over img').fadeIn(300);

                })

                //change caption if it has one
                if ($(self).hasClass('wray-caption')) {
                    $(self).find('.wray-over').children('.wray-caption').html('');

                    var imgCaption = $(self).find('.wray-thumbs img').eq(currentItem).attr('alt');
                    $(self).find('h2').text(imgCaption);
                }
            });


            //next button
            $(self).find('.wray-next').click(function () {
                //increments currentItem 1
                if (currentItem === amountOfImg) {
                    currentItem = 0;
                }

                else {
                    currentItem++;
                }


                $(self).find('.wray-over img').fadeOut(300, function () {
                    var imgSrc = $(self).find('.wray-thumbs img').eq(currentItem).attr('data-source');

                    //sets it to the hidden overlay image
                    $(self).find('.wray-over img').attr("src", imgSrc);
                    //fades in new image
                    $(self).find('.wray-over img').fadeIn(300);

                })

                //change caption if it has one
                if ($(self).hasClass('wray-caption')) {
                    $(self).find('.wray-over').children('.wray-caption').html('');

                    var imgCaption = $(self).find('.wray-thumbs img').eq(currentItem).attr('alt');
                    $(self).find('h2').text(imgCaption);
                }
            });


            //prev button
            $(self).find('.wray-prev').click(function () {
                //decreases currentItem by 1
                if (currentItem === 0) {
                    currentItem = amountOfImg;
                }

                else {
                    currentItem--;
                }

                $(self).find('.wray-over img').fadeOut(400, function () {
                    var imgSrc = $(self).find('.wray-thumbs img').eq(currentItem).attr('data-source');

                    //sets it to the hidden overlay image
                    $(self).find('.wray-over img').attr("src", imgSrc);
                    //fades in new image
                    $(self).find('.wray-over img').fadeIn();

                })

                //changes caption if it has one
                if ($(self).hasClass('wray-caption')) {
                    $(self).find('.wray-over').children('.wray-caption').html('');

                    var imgCaption = $(self).find('.wray-thumbs img').eq(currentItem).attr('alt');
                    $(self).find('h2').text(imgCaption);
                }
            });





            //closes the overlay and shows the thumbnails again
            $(self).find('.wray-close').click(function () {
                if ($(self).hasClass('wray-animateH')) {
                    $(self).parent().animate({ height: containerHeight }, 400, function () {
                        setTimeout(function () { $(self).parent().removeAttr('style'); }, 1000);

                    });
                }

                //fades out big image
                $(self).find('.wray-over').fadeOut(400, function () {


                    //shows thumbnails again
                    $(self).find('.wray-thumbs').show();

                    if ($(self).hasClass('wray-fade')) {
                        //sets opacity on thumbs to 0
                        var lis = $(self).find('.wray-thumbs img').css('opacity', '0');

                        lis.animate({
                            opacity: '1'
                        }, 500);
                    }

                    if ($(self).hasClass('wray-step')) {
                        var page1 = function () {
                            var i = 0;

                            //sets opacity on thumbs to 0
                            var lis = $(self).find('.wray-thumbs img').css('opacity', '0');

                            //displays each thumbnail 1 by 1
                            (function displayimages() {
                                if (i < lis.length) {
                                    lis.eq(i++).animate({
                                        opacity: '1'
                                    }, 500)

                                    setTimeout(function () { displayimages(); }, 100)
                                }
                            })();
                        }();
                    }


                });
            });
        });
  
});