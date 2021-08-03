function distribute(max, buckets) {
  var arr = [],
    rpt = max / buckets,
    groupLiteral_low;
  for (var i = 0; i < max; i += rpt) {
    if (Math.ceil(i) != i || i == 0) {
      groupLiteral_low = Math.ceil(i);
    } else {
      groupLiteral_low = Math.ceil(i) + 1;
    }
    arr.push({
      limit: Math.floor(rpt + i),
      literal: groupLiteral_low + "-" + Math.floor(rpt + i),
      from: groupLiteral_low,
      to: Math.floor(rpt + i),
    });
  }
  return arr;
}

var lst = distribute(3000, 15);

for (let index = 0; index < lst.length; index++) {
  const element = lst[index]["literal"];
  $(".random-select-option").append(
    `<option value="${element}">${element}</option>`
  );
}

var sold_numbers = [0, 20, 504, 866, 504, 70, 55, 80, 520, 2500, 1800];
var selected_number = {};
var amount = 0;
var ticket_price=2
$(function () {
  $(".random-select-option")
    .on("change", function () {
      valu = $(".random-select-option").val();

      var pb = lst.filter((e) => e["literal"] == valu);

      pb.map((e) => {
        $(".num-block").html("");

        for (index = e.from; index < e.to + 1; index++) {
          if (sold_numbers.includes(index)) {
            $(".num-block").append(`
            <button class="col-sm-2 col-lg-2 col-3 my-1 px-2  chip btn-md    btn  btn-danger  text-center btn-disabled btn-disable" disabled style="border-radius: 20px;padding: 5px 20px;font-size: 13px;">
             sold
            </button>
            `);
          } else if (index in selected_number) {
            $(".num-block").append(`
                          <button class="col-sm-2 col-lg-2 col-3 my-1 px-2  chip btn-md btn-primary btn  text-center" style="border-radius: 20px;padding: 5px 20px;font-size: 13px;" onclick='active_button(this)'>
                            ${index}
                            </button>
            `);
          } else {
            $(".num-block").append(`
            <button class="col-sm-2 col-lg-2 col-3 my-1 px-2  chip btn-md  text-muted  btn  text-center" style="border-radius: 20px;padding: 5px 20px;font-size: 13px;" onclick='active_button(this)'>
            ${index}
            </button> 
            `);
          }
        }
      });

      // $("#debug").text($(".select").val());
    })
    .trigger("change");
});

function active_button(button) {
  $(button).toggleClass("btn-primary");
  $(button).toggleClass("text-muted");
  var text = parseInt($(button).text().trim());
  console.log(text);
  if (text in selected_number) {
    delete selected_number[text];

    $(".ticket-block-list  .ticket-block").each((i, n) => {
      var nodeNumber = parseInt($(n).text());
      if (nodeNumber == text) {
          $(n).hide();
          amount-=ticket_price
      }
    });
  } else {
    amount+=ticket_price
    selected_number[text] = text;
    $(".ticket-block-list").append(`
    <div class="ticket-block py-1 px-2"  onclick="remove_item(this,${text})">
        <span >${text}</span>
        <i class="close fas fa-times"></i>
    </div>
    `);
  }

  $(".ticket-amount").html(amount)
}

function remove_item(node, num) {
  $(".num-block button").each((i, n) => {
    var text = parseInt($(n).text());

    var text = parseInt($(node).text());
    console.log(text , num)

    if (text in selected_number) {
      if (text == num) {
        delete selected_number[text];
        $(n).toggleClass("btn-primary");
        $(n).toggleClass("text-muted");
        console.log(n);
        $(node).hide();
        amount-=ticket_price
      }
    }
    else{
       
        if (text == num) {
            delete selected_number[text];
            $(n).toggleClass("btn-primary");
            $(n).toggleClass("text-muted");
            console.log(n);
            $(node).hide();
            amount-=ticket_price
          }
    }
    $(".ticket-amount").html(amount)
  });
  // $(node).toggleClass("btn-primary");
  // $(button).toggleClass("text-muted");
}



// manual selection  todoList
var todo_list={};
todo_amount=0;
todo_ticket_price=2

$(document).ready(
    function () {
        $('.todo-block #button').click(
            function () {
                var toAdd =parseInt( $('input[name=ListItem]').val().trim());
                if(Number.isInteger(toAdd)==false){
                    alert("enter a valid digit(s) number")
                    return false
                }
                if( toAdd<=0){
                    alert("number cannot be less than 0 or equal to 0")
                    return false
                }

                $('.todo-block ol').append('<li>' + toAdd + '  <i class="close fas fa-times"></i></li>');
                todo_list[toAdd]=toAdd;
                todo_amount+=todo_ticket_price;
                $(".todo-total").html("Total "+todo_amount)
                $('.todo-block input').val("")
            });

        $(".todo-block input[name=ListItem]").keyup(function (event) {
            if (event.keyCode == 13) {
                $(".todo-block #button").click();
            }
        });

        $(document).on('click', '.todo-block li', function () {
            $(this).hide();
            var value=parseInt($(this).text().trim());
            if(value in todo_list)
            {
                delete  todo_list[value];
                todo_amount-=todo_ticket_price;
                $(".todo-total").html("Total "+todo_amount)
            }
        });

        $('.todo-block input').focus(function () {
            $(this).val('');
        });

    

    }
);