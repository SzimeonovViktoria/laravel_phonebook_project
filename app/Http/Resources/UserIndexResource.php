<?php

    namespace App\Http\Resources;

    use Illuminate\Http\Request;
    use Illuminate\Http\Resources\Json\JsonResource;

    class UserIndexResource extends JsonResource{

        /**
         * Transform the resource into an array.
         *
         * @return array<string, mixed>
         */
        public function toArray( Request $request ): array{

            return [
                'name'            => $this->name,
                'home_country'    => $this->home_country,
                'home_city'       => $this->home_city,
                'home_address'    => $this->home_address,
                'mailing_country' => $this->mailing_country,
                'mailing_city'    => $this->mailing_city,
                'mailing_address' => $this->mailing_address,
                'email'           => $this->email,
                'phone_number'    => $this->phone_number
            ];
        }
    }
