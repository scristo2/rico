class Index {


    //write on input search

    inputSearch() {

        let aa = ["mercedes djpsod ddud0'", "reanualt", "audi", "bmw", "opel", "seat"];

        $("#search").on("input", () => {

            aa.map((e, i) => {

                if ($("#search").val().length > 0) {

                    $("#result-ul").append(`<li class="mt-4" id="result-li">${e}</li>`);
                    $("#result").removeClass("d-none");
                } else {

                    $("#result-ul").empty();
                    $("#result").addClass("d-none");
                }
            });
        });

        $("#search").blur(function () {

            $("#result-ul").empty();
            $("#result").addClass("d-none");
        });
    }
}

const index = new Index();

$(document).ready(() => {

    index.inputSearch();
});