<?php

require_once '../vendor/autoload.php';

use AlternativePayments\Config;
Config :: setApiKey("sk_test_Tg92araXcHJpFCgK1GyNH9Gy3Ztaxxxx");
Config :: setApiUrl("https://api.2000charge.com/api");

?>
<html>
    <head>        
        <title>2000Charge test examples</title>
    </head>
    <body>
        <table>
            <tr>
                <td><strong>Options:</strong></td>
            </tr>
            <tr>
                <td><a href="index.php?option=customer&action=add">Add customer</a></td>
                <td><a href="index.php?option=customer&action=get">Get customer</a></td>
                <td><a href="index.php?option=customer&action=getall">Get all customers</a></td>
            </tr>
            <tr>
                <td><table>             
						<tr>
							<td><a href="index.php?option=transaction&action=create_new_transaction_astropaycard">Add AstroPayCard transaction</a></td></tr>
						<tr>
							<td><a href="index.php?option=transaction&action=create_new_transaction_astropaydirect">Add AstroPayDirect transaction</a></td></tr>
						<tr>
							<td><a href="index.php?option=transaction&action=create_new_transaction_banamex">Add Banamex transaction</a></td></tr>
						<tr>
							<td><a href="index.php?option=transaction&action=create_new_transaction_bancodeoccidente">Add Banco de Occidente transaction</a></td></tr>
						<tr>
							<td><a href="index.php?option=transaction&action=create_new_transaction_bancodobrasil">Add Banco do Brasil transaction</a></td></tr>
						<tr>
							<td><a href="index.php?option=transaction&action=create_new_transaction_bancontact">Add Bancontact(Mistercash) transaction</a></td></tr>
						<tr>
							<td><a href="index.php?option=transaction&action=create_new_transaction_boleto">Add Boleto transaction</a></td></tr>
						<tr>
							<td><a href="index.php?option=transaction&action=create_new_transaction_bradesco">Add Bradesco transaction</a></td></tr>
						<tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_directpayeu">Add DirectPayEU transaction</a></td></tr>
						<tr>
							<td><a href="index.php?option=transaction&action=create_new_transaction_entercash">Add Entercash transaction</a></td></tr>
						<tr>
							<td><a href="index.php?option=transaction&action=create_new_transaction_eps">Add Eps transaction</a></td></tr>
						<tr>
							<td><a href="index.php?option=transaction&action=create_new_transaction_giropay">Add Giropay transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_ideal">Add iDEAL transaction</a></td></tr>
						<tr>
							<td><a href="index.php?option=transaction&action=create_new_transaction_mybank">Add MyBank transaction</a></td></tr>
						<tr>
							<td><a href="index.php?option=transaction&action=create_new_transaction_paysafe">Add PaySafe Card transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_poli">Add POLi transaction</a></td></tr>
						<tr>
							<td><a href="index.php?option=transaction&action=create_new_transaction_postfinance">Add PostFinance transaction</a></td></tr>
						<tr>
							<td><a href="index.php?option=transaction&action=create_new_transaction_przelewy24">Add Przelewy24 transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_qiwi">Add QIWI transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_safetypay">Add SafetyPay transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_sepa">Add SEPA transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_sofortuberweisung">Add SOFORT Uberweisung transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_trustpay">Add TrustPay transaction</a></td></tr>
						<tr>
							<td><a href="index.php?option=transaction&action=create_new_transaction_verkkopankki">Add Verkkopankki transaction</a></td></tr>
                        <tr>
                    </table></td>
                <td><a href="index.php?option=transaction&action=get">Get transaction</a></td>
                <td><a href="index.php?option=transaction&action=getall">Get all transactions</a></td>
            </tr>
            <tr>
                <td><a href="index.php?option=subscription&action=add">Add subscription</a></td>
                <td><a href="index.php?option=subscription&action=get">Get subscription</a></td>
                <td><a href="index.php?option=subscription&action=getall">Get all subscriptions</a></td>
            </tr>
            <tr>
                <td><a href="index.php?option=plan&action=add">Add plan</a></td>
                <td><a href="index.php?option=plan&action=get">Get plan</a></td>
                <td><a href="index.php?option=plan&action=getall">Get all plans</a></td>
            </tr>
            <tr>
                <td><a href="index.php?option=refund&action=add">Add refund</a></td>
                <td><a href="index.php?option=refund&action=get">Get refund</a></td>
                <td><a href="index.php?option=refund&action=getall">Get all refunds</a></td>
            </tr>
            <tr>
                <td><a href="index.php?option=void&action=add">Add void</a></td>
                <td><a href="index.php?option=void&action=get">Get void</a></td>
                <td><a href="index.php?option=void&action=getall">Get all voids</a></td>
            </tr>
        </table>
<?php              
        if ( isset($_GET["option"]) && isset($_GET["action"]) ) {
            try {
                require_once $_GET["option"].'/'.$_GET["action"].".php";
            } catch (\AP\Error\ApiException $exc) {
                echo $exc->getMessage();
            } catch (\AP\Error\PaymentException $exc) {
                echo $exc->getMessage();
            } catch (\AP\Error\InvalidParameterException $exc) {
                echo $exc->getParameter() . "<br>";
                echo $exc->getMessage();
            } catch (Exception $exc) {
                var_dump($exc);
                echo $exc->getMessage();
            }
            
        }        
?>
    </body>
</html>