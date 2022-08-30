<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CharactersController extends Controller
{
    public function characters ()
    {
        return $characters = [
            [
                "id" => 1,
                "name" => "Philip J. Fry",
                "nickname" => "Fry",
                "species" => "Human",
                "gender" => "Male",
                "occupation" => "Delivery Boy/Pilot, Tentacle Pope of Universe Gamma (former)",
                "origin" => "Earth",
                "image" => ""
            ],
            [
                "id" => 2,
                "name" => "Turanga Leela",
                "nickname" => "Leela",
                "species" => "Mutant Human",
                "gender" => "Female",
                "occupation" => "Captain of the Planet Express Ship",
                "origin" => "Earth",
                "image" => ""
            ],
            [
                "id" => 3,
                "name" => "Bender Bending Rodríguez",
                "nickname" => "Bender",
                "species" => "Bending Industrial Robot",
                "gender" => "Male",
                "occupation" => "Assistant Manager of Sales & Chef at Planet Express, Suicide booth construction worker (former)",
                "origin" => "Earth",
                "image" => ""
            ],
            [
                "id" => 4,
                "name" => "Amy Wong",
                "nickname" => "Amy",
                "species" => "Human",
                "gender" => "Female",
                "occupation" => "Long-term Intern at Planet Express & Physicist intern to Professor Hubert J. Farnsworth",
                "origin" => "Mars",
                "image" => ""
            ],
            [
                "id" => 5,
                "name" => "Hubert J. Farnsworth",
                "nickname" => "Professor Farnsworth",
                "species" => "Human",
                "gender" => "Male",
                "occupation" => "CEO/Owner of Planet Express, Lecturer at Mars University",
                "origin" => "Earth",
                "image" => ""
            ],
            [
                "id" => 6,
                "name" => "Hermes Conrad",
                "nickname" => "Hermes",
                "species" => "Human",
                "gender" => "Male",
                "occupation" => "Bureaucrat Grade 35 and accountant of the Planet Express delivery company",
                "origin" => "Earth",
                "image" => ""
            ],
            [
                "id" => 7,
                "name" => "John A. Zoidberg",
                "nickname" => "Dr. Zoidberg",
                "species" => "Decapodian",
                "gender" => "Male",
                "occupation" => "Staff doctor at the Planet Express delivery company",
                "origin" => "Decapod 10",
                "image" => ""
            ],
            [
                "id" => 8,
                "name" => "Lieutenant Kif Kroker",
                "nickname" => "Kif",
                "species" => "Amphibiosan",
                "gender" => "Male",
                "occupation" => "DOOP Fourth Lieutenant",
                "origin" => "Amphibios 9",
                "image" => ""
            ],
            [
                "id" => 9,
                "name" => "Zapp Brannigan",
                "nickname" => "Zapp",
                "species" => "Human",
                "gender" => "Male",
                "occupation" => "Captain of the DOOP starship Nimbus and high ranking general",
                "origin" => "Earth",
                "image" => ""
            ],
            [
                "id" => 10,
                "name" => "Carol Miller",
                "nickname" => "Mom",
                "species" => "Human",
                "gender" => "Female",
                "occupation" => "Owner and CEO of MomCorp",
                "origin" => "Earth",
                "image" => ""
            ],
            [
                "id" => 11,
                "name" => "Lord Nibbler",
                "nickname" => "Nibbler",
                "species" => "Nibblonian",
                "gender" => "Male",
                "occupation" => "Ambassador to Earth, Planet Express crew member",
                "origin" => "Eternium",
                "image" => ""
            ],
        ];
    }
}
