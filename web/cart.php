<script type="text/javascript" src="js/angular.js"></script>
<script type="text/javascript" src="js/ngCart.js"></script>
<script>
var myApp = angular.module('myApp',['ngCart']);

myApp.controller ('myCtrl', ['$scope', '$http', 'ngCart', function($scope, $http, ngCart) {
    ngCart.setTaxRate(7.5);
    ngCart.setShipping(2.99);    
}]);
</script>
<div ng-controller="myCtrl">

<div class="row">
  
    <div class="col-xs-offset-8 col-xs-4">
    <h3>Summary <span>(ngcart-summary)</span></h3>
        
      <ngcart-summary></ngcart-summary>
    </div>
    </div>
    <hr />
         <h3>Add to Cart <span>(ngcart-addtocart)</span></h3>
<div class="row">
    <div class="col-xs-6 col-sm-3">
        <h4>My Item #1</h4>
        <p> $10.99</p>
        <ngcart-addtocart id="item1" name="My Item #1" price="10.99" quantity="1" quantity-max="5">Add to Cart</ngcart-addtocart>
    </div>
    <div class="col-xs-6 col-sm-3">
        <h4>My Item #2</h4>
        <p> $15.29</p>
        <ngcart-addtocart id="item2" name="My Item #2" price="15.29" quantity="1" quantity-max="5">Add to Cart</ngcart-addtocart>
    </div>
    <div class="col-xs-6 col-sm-3">
        <h4>My Item #3</h4>
        <p> $25.75</p>
        <ngcart-addtocart id="item3" name="My Item #3" price="25.75" quantity="3" quantity-max="10">Add to Cart</ngcart-addtocart>
    </div>
    <div class="col-xs-6 col-sm-3">
        <h4>My Item #4</h4>
        <p> $29.25</p>
        <ngcart-addtocart id="item4" name="My Item #4" price="29.25" quantity="1" quantity-max="10">Add to Cart</ngcart-addtocart>        
    </div>
</div>

    <hr/>
    <h3>Cart <span> (ngcart-cart)</span></h3>

    <ngcart-cart></ngcart-cart>
   
    <hr/>

<div class="row">
    <div class="col-md-12">
        
    <h3>Checkout <span> (ngcart-checkout)</span></h3>
        
        
        <div class="row">
    <div class="col-xs-4">
        <h4>service 'log'</h4>
        <ngcart-checkout service="log">Checkout</ngcart-checkout>
    </div>
    <div class="col-xs-4">
        <h4>service 'http'</h4>
        <ngcart-checkout service="http" settings="httpSettings">Checkout </ngcart-checkout>
    </div>
    <div class="col-xs-4">
        <h4>service 'paypal'</h4>
        <ngcart-checkout service="paypal" settings="payPalSettings"></ngcart-checkout>
    </div>
</div>
        


    </div>
</div>

</div>


<!--  TEMPALATES -->
<!--  TEMPALATES -->
<!--  TEMPALATES -->

<script type="text/ng-template" id="template/ngCart/summary.html"><div class="row">
 
    <div class="col-md-6">{{ ngCart.getTotalItems() }}
        <ng-pluralize count="ngCart.getTotalItems()" when="{1: 'item', 'other':'items'}"></ng-pluralize>
        <br />{{ ngCart.totalCost() | currency }}
    </div>
</div>
</script>


<script type="text/ng-template" id="template/ngCart/cart.html">
<div class="alert alert-warning" role="alert" ng-show="ngCart.getTotalItems() === 0">
    Your cart is empty
</div>

<div class="table-responsive col-lg-12" ng-show="ngCart.getTotalItems() > 0">

    <table class="table table-striped ngCart cart">

        <thead>
        <tr>
            <th></th>
            <th></th>
            <th>Quantity</th>
            <th>Amount</th>
            <th>Total</th>
        </tr>
        </thead>
        <tfoot>
        <tr ng-show="ngCart.getTax()">
            <td></td>
            <td></td>
            <td></td>
            <td>Tax ({{ ngCart.getTaxRate() }}%):</td>
            <td>{{ ngCart.getTax() | currency }}</td>
        </tr>
        <tr ng-show="ngCart.getShipping()">
            <td></td>
            <td></td>
            <td></td>
            <td>Shipping:</td>
            <td>{{ ngCart.getShipping() | currency }}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Total:</td>
            <td>{{ ngCart.totalCost() | currency }}</td>
        </tr>
        </tfoot>
        <tbody>
        <tr ng-repeat="item in ngCart.getCart().items track by $index">
            <td><span ng-click="ngCart.removeItemById(item.getId())" class="glyphicon glyphicon-remove"></span></td>

            <td>{{ item.getName() }}</td>
            <td><span class="glyphicon glyphicon-minus" ng-class="{'disabled':item.getQuantity()==1}"
                      ng-click="item.setQuantity(-1, true)"></span>&nbsp;&nbsp;
                {{ item.getQuantity() | number }}&nbsp;&nbsp;
                <span class="glyphicon glyphicon-plus" ng-click="item.setQuantity(1, true)"></span></td>
            <td>{{ item.getPrice() | currency}}</td>
            <td>{{ item.getTotal() | currency }}</td>
        </tr>
        </tbody>
    </table>
</div>

</script>

<script type="text/ng-template" id="template/ngCart/addtocart.html"><div ng-hide="attrs.id">
    <a class="btn btn-lg btn-primary" ng-disabled="true" ng-transclude></a>

</div>
<div ng-show="attrs.id">
    <div>
        <span ng-show="quantityMax">
            <select name="quantity" id="quantity" ng-model="q"
                    ng-options=" v for v in qtyOpt"></select>
        </span>
        <a class="btn btn-sm btn-primary"
           ng-click="ngCart.addItem(id, name, price, q, data)"
           ng-transclude></a>
    </div>
    <mark  ng-show="inCart()">
        This item is in your cart. <a ng-click="ngCart.removeItemById(id)" style="cursor: pointer;">Remove</a>
    </mark>
</div>
</script>

<script type="text/ng-template" id="template/ngCart/checkout.html">
    
<div ng-if="service=='http' || service == 'log'">
    <button class="btn btn-primary" ng-click="checkout()" ng-disabled="!ngCart.getTotalItems()" ng-transclude>Checkout</button>
</div>


<div ng-if="service=='paypal'">

    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" ng-show="ngCart.getTotalItems()">
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="business" value="{{ settings.paypal.business }}">
        <input type="hidden" name="lc" value="CA">
        <input type="hidden" name="item_name" value="{{ settings.paypal.item_name }}">
        <input type="hidden" name="item_number" value="{{ settings.paypal.item_number }}">
        <input type="hidden" name="amount" value="{{ ngCart.getSubTotal()}}">
        <input type="hidden" name="currency_code" value="{{ settings.paypal.currency_code }}">
        <input type="hidden" name="button_subtype" value="services">
        <input type="hidden" name="no_note" value="0">
        <input type="hidden" name="tax_rate" value="{{ ngCart.getTaxRate()}}">
        <input type="hidden" name="shipping" value="{{ ngCart.getShipping()}}">
        <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>

</div>
    
</script>
    