$(document).ready(function() {
    $('.donation').click(function() {
        Swal.fire({
            title: 'Soutenez notre projet en faisant un don, entrez votre montant ici',
            input: 'number',
            inputAttributes: {
                autocapitalize: 'off'
            },
            showCancelButton: !0,
            confirmButtonText: 'Donner <i class="fa fa-heart"></i>',
            confirmButtonColor: '#d751e7',
            cancelButtonColor: '#fa218d',
            cancelButtonText: 'Annuler',
            showLoaderOnConfirm: !0,
            inputValidator: (value)=>{
                return new Promise((resolve)=>{
                        if (!value || value < 100) {
                            resolve('Le montant doit être supérieur à 100 FCFA')
                        } else {
                            resolve()
                        }
                    }
                )
            }
            ,
            preConfirm: (amount)=>{
                    $.post("api/don", {
                    amount: amount
                }, function(data) {
                    if (data) {
                        var t = data.trans_id;
                        var cpm_amount = data.amount;
                        CinetPay.setConfig({
                            apikey: '236824315f2aa4edc2f084.44085959',
                            site_id: 836273,
                            notify_url: 'http://ainotek.com/'
                        });
                        var timeStampInMs = window.performance && window.performance.now && window.performance.timing && window.performance.timing.navigationStart ? window.performance.now() + window.performance.timing.navigationStart : Date.now();
                        CinetPay.setSignatureData({
                            amount: parseInt(cpm_amount),
                            trans_id: t,
                            currency: 'CFA',
                            designation: 'Don à D2messe de ' + parseInt(cpm_amount) + ' FCFA',
                            custom: t
                        });
                        CinetPay.getSignature();
                        CinetPay.on('signatureCreated', function(token) {console.log(token)});
                        CinetPay.on('paymentPending', function(e) {});
                        CinetPay.on('error', function(e) {});
                        CinetPay.on('paymentSuccessfull', function(paymentInfo) {
                            if (typeof paymentInfo.lastTime != 'undefined') {
                                if (paymentInfo.cpm_result == '00') {
                                    Swal.fire({
                                        type: 'success',
                                        html: 'Votre don a été effectué avec succès : <br> Montant : ' + paymentInfo.cpm_amount + ' FCFA <br>' + " Merci d'avoir soutenu la cause Lulla"
                                    }).then(function() {
                                        location.reload(!0)
                                    })
                                }
                            }
                        })
                    } else {
                        Swal.fire.showValidationMessage("Oup's un problème est survenu :(")
                    }
                })
            }
            ,
            allowOutsideClick: ()=>!Swal.isLoading()
        }).then((result)=>{
                console.log(result)
            }
        )
    });
});

$(document).ready(function() {
    $('.payment').click(function(element) {
        element.preventDefault();
        element.submit().then(response){

        };
        console.log(response);
        var parishSelected = document.getElementById('select2-2');
        var parishSelectedName = parishSelected.options[parishSelected.selectedIndex].text;
        let massSelect = $('#mass_id');

        Swal.fire({
            title: 'Vous allez être rediriger pour payer pour votre demande de messe (3500 FCFA)',
            showCancelButton: !0,
            confirmButtonText: 'Valider <i class="ml-2 fa fa-check"></i>',
            confirmButtonColor: '#d751e7',
            cancelButtonColor: '#fa218d',
            cancelButtonText: 'Annuler',
            showLoaderOnConfirm: !0,
            preConfirm: ()=>{
                $.post("api/don", {
                    amount: 3500
                }, function(data) {
                    if (data) {
                        var t = data.trans_id;
                        var cpm_amount = 3500;
                        CinetPay.setConfig({
                            apikey: '236824315f2aa4edc2f084.44085959',
                            site_id: 836273,
                            notify_url: 'http://ainotek.com/'
                        });
                        var timeStampInMs = window.performance && window.performance.now && window.performance.timing && window.performance.timing.navigationStart ? window.performance.now() + window.performance.timing.navigationStart : Date.now();
                        CinetPay.setSignatureData({
                            amount: parseInt(cpm_amount),
                            trans_id: t,
                            currency: 'CFA',
                            designation: 'Demande de messe pour '+ parishSelectedName + "de " + (cpm_amount) + ' FCFA',
                            custom: {
                                parish_id: "",
                                mass_id: ""
                           }
                        });
                        CinetPay.getSignature();
                        CinetPay.on('signatureCreated', function(token) {console.log(token)});
                        CinetPay.on('paymentPending', function(e) {});
                        CinetPay.on('error', function(e) {});
                        CinetPay.on('paymentSuccessfull', function(paymentInfo) {
                            if (typeof paymentInfo.lastTime != 'undefined') {
                                if (paymentInfo.cpm_result == '00') {
                                    Swal.fire({
                                        type: 'success',
                                        html: 'Votre don a été effectué avec succès : <br> Montant : ' + paymentInfo.cpm_amount + ' FCFA <br>' + " Merci d'avoir soutenu la cause Lulla"
                                    }).then(function() {
                                        location.reload(!0)
                                    })
                                }
                            }
                        })
                    } else {
                        Swal.fire.showValidationMessage("Oup's un problème est survenu :(")
                    }
                })
            }
            ,
            allowOutsideClick: ()=>!Swal.isLoading()
        }).then((result)=>{
                console.log(result)
            }
        )
    });
});

