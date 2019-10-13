<?php
require_once plugin_dir_path( __FILE__ ) . 'Textbroker-php5-client/Textbroker.php';


class TextBroker_Utils {

    public function __construct(string $budgetKey, int $budgetId, string $password, string $location) {
        $this->budgetKey = $budgetkey;
        $this->budgetId = $budgetId;
        $this->password = $password;
        $this->location = $location;
        $this->budgetOrder = new TextbrokerBudgetOrder(
            $this->budgetKey,
            $this->budgetId,
            $this->password,
            $this->location);
    }

    public function orderText(string $title,
                            string $description,
                            int $minLength,
                            int $maxLength,
                            int $dueDays,
                            int $rating) {
        $response = $this->budgetOrder->create(0, $title,
            $description, $minLength, $maxLength, $rating, $dueDays);
        return $response;
    }

    public function getCategories() {
        return $this->budgetOrder->getCategories();
    }

}