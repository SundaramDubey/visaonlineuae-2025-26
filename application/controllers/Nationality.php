<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nationality extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function get_countries()
    {
        $countries = [
            ["code" => "AF", "name" => "Afghanistan"],
            ["code" => "AL", "name" => "Albania"],
            ["code" => "DZ", "name" => "Algeria"],
            ["code" => "AD", "name" => "Andorra"],
            ["code" => "AO", "name" => "Angola"],
            ["code" => "AG", "name" => "Antigua and Barbuda"],
            ["code" => "AR", "name" => "Argentina"],
            ["code" => "AM", "name" => "Armenia"],
            ["code" => "AU", "name" => "Australia"],
            ["code" => "AT", "name" => "Austria"],
            ["code" => "AZ", "name" => "Azerbaijan"],
            ["code" => "BS", "name" => "Bahamas"],
            ["code" => "BH", "name" => "Bahrain"],
            ["code" => "BD", "name" => "Bangladesh"],
            ["code" => "BB", "name" => "Barbados"],
            ["code" => "BY", "name" => "Belarus"],
            ["code" => "BE", "name" => "Belgium"],
            ["code" => "BZ", "name" => "Belize"],
            ["code" => "BJ", "name" => "Benin"],
            ["code" => "BT", "name" => "Bhutan"],
            ["code" => "BO", "name" => "Bolivia"],
            ["code" => "BA", "name" => "Bosnia and Herzegovina"],
            ["code" => "BW", "name" => "Botswana"],
            ["code" => "BR", "name" => "Brazil"],
            ["code" => "BN", "name" => "Brunei"],
            ["code" => "BG", "name" => "Bulgaria"],
            ["code" => "BF", "name" => "Burkina Faso"],
            ["code" => "BI", "name" => "Burundi"],
            ["code" => "CV", "name" => "Cabo Verde"],
            ["code" => "KH", "name" => "Cambodia"],
            ["code" => "CM", "name" => "Cameroon"],
            ["code" => "CA", "name" => "Canada"],
            ["code" => "CF", "name" => "Central African Republic"],
            ["code" => "TD", "name" => "Chad"],
            ["code" => "CL", "name" => "Chile"],
            ["code" => "CN", "name" => "China"],
            ["code" => "CO", "name" => "Colombia"],
            ["code" => "KM", "name" => "Comoros"],
            ["code" => "CD", "name" => "Congo"],
            ["code" => "CR", "name" => "Costa Rica"],
            ["code" => "HR", "name" => "Croatia"],
            ["code" => "CU", "name" => "Cuba"],
            ["code" => "CY", "name" => "Cyprus"],
            ["code" => "CZ", "name" => "Czech Republic"],
            ["code" => "DK", "name" => "Denmark"],
            ["code" => "DJ", "name" => "Djibouti"],
            ["code" => "DM", "name" => "Dominica"],
            ["code" => "DO", "name" => "Dominican Republic"],
            ["code" => "EC", "name" => "Ecuador"],
            ["code" => "EG", "name" => "Egypt"],
            ["code" => "SV", "name" => "El Salvador"],
            ["code" => "GQ", "name" => "Equatorial Guinea"],
            ["code" => "ER", "name" => "Eritrea"],
            ["code" => "EE", "name" => "Estonia"],
            ["code" => "SZ", "name" => "Eswatini"],
            ["code" => "ET", "name" => "Ethiopia"],
            ["code" => "FJ", "name" => "Fiji"],
            ["code" => "FI", "name" => "Finland"],
            ["code" => "FR", "name" => "France"],
            ["code" => "GA", "name" => "Gabon"],
            ["code" => "GM", "name" => "Gambia"],
            ["code" => "GE", "name" => "Georgia"],
            ["code" => "DE", "name" => "Germany"],
            ["code" => "GH", "name" => "Ghana"],
            ["code" => "GR", "name" => "Greece"],
            ["code" => "GD", "name" => "Grenada"],
            ["code" => "GT", "name" => "Guatemala"],
            ["code" => "GN", "name" => "Guinea"],
            ["code" => "GW", "name" => "Guinea-Bissau"],
            ["code" => "GY", "name" => "Guyana"],
            ["code" => "HT", "name" => "Haiti"],
            ["code" => "HN", "name" => "Honduras"],
            ["code" => "HU", "name" => "Hungary"],
            ["code" => "IS", "name" => "Iceland"],
            ["code" => "IN", "name" => "India"],
            ["code" => "ID", "name" => "Indonesia"],
            ["code" => "IR", "name" => "Iran"],
            ["code" => "IQ", "name" => "Iraq"],
            ["code" => "IE", "name" => "Ireland"],
            ["code" => "IL", "name" => "Israel"],
            ["code" => "IT", "name" => "Italy"],
            ["code" => "JM", "name" => "Jamaica"],
            ["code" => "JP", "name" => "Japan"],
            ["code" => "JO", "name" => "Jordan"],
            ["code" => "KZ", "name" => "Kazakhstan"],
            ["code" => "KE", "name" => "Kenya"],
            ["code" => "KI", "name" => "Kiribati"],
            ["code" => "KW", "name" => "Kuwait"],
            ["code" => "KG", "name" => "Kyrgyzstan"],
            ["code" => "LA", "name" => "Laos"],
        ];

        header('Content-Type: application/json');
        echo json_encode($countries);
    }
}
?>