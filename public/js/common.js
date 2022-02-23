const ajaxRequest = (reqType, uri, data, isFormdata = false) => {
    return new Promise((resolve, reject) => {
        let options = {
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            },
            type: reqType,
            url: uri,
            dataType: "json",
            data: isFormdata ? data : { ...data },
            processData: isFormdata ? false : true,
            success: function (resp) {
                resolve(resp);
            },
            error: err => {
                console.log(err)
                reject(err);
            }
        }
        if (isFormdata) {
            options = { ...options, enctype: 'multipart/form-data', contentType: false }
        }
        $.ajax(options);
    });
};
