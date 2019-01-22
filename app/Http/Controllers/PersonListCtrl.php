<?php

namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;


use app\forms\PersonSearchForm;

use app\forms\FriendForm;
//use app\forms\ChatForm;

class PersonListCtrl {
	public $id;
    private $form; //dane formularza wyszukiwania
    private $records; //rekordy pobrane z bazy danych
	 private $myfriend; //rekordy pobrane z bazy danych
	  private $myfriend2; //rekordy pobrane z bazy danych
	   private $somfriend; //rekordy pobrane z bazy danych
	  private $somfriend2; //rekordy pobrane z bazy danych
	 public $fd;

    public function __construct() {
        //stworzenie potrzebnych obiektów
       
    }

   
	

    public function action_personList() {
        // 1. Walidacja danych formularza (z pobraniem)
        // - W tej aplikacji walidacja nie jest potrzebna, ponieważ nie wystąpią błedy podczas podawania nazwiska.
        //   Jednak pozostawiono ją, ponieważ gdyby uzytkownik wprowadzał np. datę, lub wartość numeryczną, to trzeba
        //   odpowiednio zareagować wyświetlając odpowiednią informację (poprzez obiekt wiadomości Messages)
       

        // 2. Przygotowanie mapy z parametrami wyszukiwania (nazwa_kolumny => wartość)
       /* $search_params = []; //przygotowanie pustej struktury (aby była dostępna nawet gdy nie będzie zawierała wierszy)
        if (isset($this->form->nick) && strlen($this->form->nick) > 0) {
            $search_params['nick[~]'] = $this->form->nick . '%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }
		
        if (isset($this->form->gender) && strlen($this->form->gender) > 0) {
            $search_params['gender'] = $this->form->gender ; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }
		
		 if (isset($this->form->prefM) && strlen($this->form->prefM) > 0) {
            $search_params['prefM'] = $this->form->prefM ; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }
		 if (isset($this->form->prefW) && strlen($this->form->prefW) > 0) {
            $search_params['prefW'] = $this->form->prefW ; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }
		
		if (isset($this->form->complex) && strlen($this->form->complex) > 0) {
            $search_params['complex'] = $this->form->complex ; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }
		if (isset($this->form->hcolor) && strlen($this->form->hcolor) > 0) {
            $search_params['hcolor'] = $this->form->hcolor ; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }
		
		if (isset($this->form->city) && strlen($this->form->city) > 0) {
            $search_params['city'] = $this->form->city ; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }
		if (isset($this->form->nation) && strlen($this->form->nation) > 0) {
            $search_params['nation'] = $this->form->nation ; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }
		if (isset($this->form->ecolor) && strlen($this->form->ecolor) > 0) {
            $search_params['ecolor'] = $this->form->ecolor ; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }
		

        // 3. Pobranie listy rekordów z bazy danych
        // W tym wypadku zawsze wyświetlamy listę osób bez względu na to, czy dane wprowadzone w formularzu wyszukiwania są poprawne.
        // Dlatego pobranie nie jest uwarunkowane poprawnością walidacji (jak miało to miejsce w kalkulatorze)
        //przygotowanie frazy where na wypadek większej liczby parametrów
        $num_params = sizeof($search_params); //policz parametry
        if ($num_params > 1) {
           $where = ["AND" => $search_params];
		}
         else {
            $where = &$search_params;
        }
        //dodanie frazy sortującej po nazwisku
        $where ["ORDER"] = "nick";
        //wykonanie zapytania
		
		*/
		

			
			
			//$records = DB::table('users')->get();
			
			DB::table('users')->orderBy('id')->chunk(100, function ($users) {
    foreach ($users as $user) {
        //
    }
        }
		
		
	
		
    }

}
