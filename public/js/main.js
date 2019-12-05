
    $('input#amount_to_change').on('keyup', function () {


        let amount   = $('input#amount_to_change').val();
        let currency = $( "#myselect" ).val();
        let total_amount = 0;
        let formatter = new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: currency,
            });

     

    if (amount) {

        if (currency == 'USD') {

            total_amount  = parseInt(amount) * 1;
            console.log(total_amount);

        } else if(currency == 'KES'){

            total_amount  = parseInt(amount) * 114;
            console.log(total_amount);

        }else if(currency == 'EUR'){

            total_amount  = parseInt(amount) * 0.85;
            console.log(total_amount);

        }else if(currency == 'GBP'){

            total_amount  = parseInt(amount) * 0.74;
            console.log(total_amount);

        }else if(currency == 'GHS'){

            total_amount  = parseInt(amount) * 6.2;
            console.log(total_amount);

        } else {

            total_amount  = parseInt(amount) * 480;
            console.log(total_amount);
        }

    }

       
        let _html = formatter.format(total_amount);
        
        $('#total_amount_to_pay').html(_html);




    });


   

   //Other function 




    $('#myselect').on('change', function () {


        let amount   = $('input#amount_to_change').val();
        let currency = $( "#myselect" ).val();
        let total_amount = 0;
        let formatter = new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: currency,
            });

     

    if (amount) {

        if (currency == 'USD') {

            total_amount  = parseInt(amount) * 1;
            console.log(total_amount);

        } else if(currency == 'KES'){

            total_amount  = parseInt(amount) * 114;
            console.log(total_amount);

        }else if(currency == 'EUR'){

            total_amount  = parseInt(amount) * 0.85;
            console.log(total_amount);

        }else if(currency == 'GBP'){

            total_amount  = parseInt(amount) * 0.74;
            console.log(total_amount);

        }else if(currency == 'GHS'){

            total_amount  = parseInt(amount) * 1;
            console.log(total_amount);

        } else {

            total_amount  = parseInt(amount) * 480;
            console.log(total_amount);
        }

    }

       
        let _html = formatter.format(total_amount);
        
        $('#total_amount_to_pay').html(_html);




    });

v