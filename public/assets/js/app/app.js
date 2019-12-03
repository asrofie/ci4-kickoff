function formatCurrency(number)
{
    let n = parseFloat(number);
    return n.toLocaleString('id-ID');
}

function formatDateTime(dateTime)
{
    if(dateTime == null)
        return '';
    return moment(dateTime).format('D MMMM YYYY HH:mm:ss');
}

function formatDate(date)
{
    if(date == null)
        return '';
    return moment(date).format('D MMMM YYYY');
}

function initTableToolbar(funRefresh, funAdd)
{
    let toolbar = [];
    if( funRefresh!=null )
    {
        let btnRefresh = {
            text:'<span class="fa fa-sync"></span>',
            className: 'btn btn-info', 
            action: function ( e, dt, node, config ) {
                funRefresh( e, dt, node, config );
            }
        };
        toolbar.push(btnRefresh);
    }
    if( funAdd!=null )
    {
        let btnAdd = {
            text:'<span class="fa fa-plus"></span>',
            className: 'btn btn-info', 
            action: function ( e, dt, node, config ) {
                funAdd( e, dt, node, config );
            }
        };
        toolbar.push(btnAdd);
    }
    return toolbar;
}


function initDatePicker(selector) {
    return $(selector).datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd',
        clearBtn : true
    });
}

function initSelect2(id, urlAjax)
{
  $(id).select2({
      ajax: {
          url: urlAjax,
          delay : 75, //milisecond
          dataType: 'json',
          data: function (params)
          {
            var query = {
              search: params.term
            }
            return query;
          },
          processResults: function (data)
          {
            return {
              results: data.items
            };
          }
      }
  });
}