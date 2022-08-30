<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CharactersController extends Controller
{
    public function characters ()
    {
        $dirImage = public_path('assets/img');
        return $characters = [
            [
                "id" => 1,
                "name" => "Philip J. Fry",
                "nickname" => "Fry",
                "species" => "Human",
                "gender" => "Male",
                "occupation" => "Delivery Boy/Pilot, Tentacle Pope of Universe Gamma (former)",
                "origin" => "Earth",
                "image" => "https://api-futurama.herokuapp.com/assets/img/1.png"
            ],
            [
                "id" => 2,
                "name" => "Turanga Leela",
                "nickname" => "Leela",
                "species" => "Human (Mutant)",
                "gender" => "Female",
                "occupation" => "Captain of the Planet Express Ship",
                "origin" => "Earth",
                "image" => $dirImage . "/Leela.png"
            ],
            [
                "id" => 3,
                "name" => "Bender Bending Rodríguez",
                "nickname" => "Bender",
                "species" => "Bending Industrial Robot",
                "gender" => "Male",
                "occupation" => "Assistant Manager of Sales & Chef at Planet Express, Suicide booth construction worker (former)",
                "origin" => "Earth",
                "image" => $dirImage . "/Bender.png"
            ],
            [
                "id" => 4,
                "name" => "Amy Wong",
                "nickname" => "Amy",
                "species" => "Human",
                "gender" => "Female",
                "occupation" => "Long-term Intern at Planet Express & Physicist intern to Professor Hubert J. Farnsworth",
                "origin" => "Mars",
                "image" => $dirImage . "/Amy.png"
            ],
            [
                "id" => 5,
                "name" => "Hubert J. Farnsworth",
                "nickname" => "Professor Farnsworth",
                "species" => "Human",
                "gender" => "Male",
                "occupation" => "CEO/Owner of Planet Express, Lecturer at Mars University",
                "origin" => "Earth",
                "image" => $dirImage . "/ProfessorFarnsworth.png"
            ],
            [
                "id" => 6,
                "name" => "Hermes Conrad",
                "nickname" => "Hermes",
                "species" => "Human",
                "gender" => "Male",
                "occupation" => "Bureaucrat Grade 35 and accountant of the Planet Express delivery company",
                "origin" => "Earth",
                "image" => $dirImage . "/Hermes.png"
            ],
            [
                "id" => 7,
                "name" => "John A. Zoidberg",
                "nickname" => "Dr. Zoidberg",
                "species" => "Decapodian",
                "gender" => "Male",
                "occupation" => "Staff doctor at the Planet Express delivery company",
                "origin" => "Decapod 10",
                "image" => $dirImage . "/Dr.Zoidberg.png"
            ],
            [
                "id" => 8,
                "name" => "Lieutenant Kif Kroker",
                "nickname" => "Kif",
                "species" => "Amphibiosan",
                "gender" => "Male",
                "occupation" => "DOOP Fourth Lieutenant",
                "origin" => "Amphibios 9",
                "image" => $dirImage . "/Kif.png"
            ],
            [
                "id" => 9,
                "name" => "Zapp Brannigan",
                "nickname" => "Zapp",
                "species" => "Human",
                "gender" => "Male",
                "occupation" => "Captain of the DOOP starship Nimbus and high ranking general",
                "origin" => "Earth",
                "image" => $dirImage . "/Zapp.png"
            ],
            [
                "id" => 10,
                "name" => "Carol Miller",
                "nickname" => "Mom",
                "species" => "Human",
                "gender" => "Female",
                "occupation" => "Owner and CEO of MomCorp",
                "origin" => "Earth",
                "image" => $dirImage . "/Mom.png"
            ],
            [
                "id" => 11,
                "name" => "Lord Nibbler",
                "nickname" => "Nibbler",
                "species" => "Nibblonian",
                "gender" => "Male",
                "occupation" => "Ambassador to Earth, Planet Express crew member",
                "origin" => "Eternium",
                "image" => $dirImage . "/Nibbler.png"
            ],
            [
                "id" => 12,
                "name" => "Scruffy Scruffington",
                "nickname" => "Scruffy",
                "species" => "Human (Zombie)",
                "gender" => "Male",
                "occupation" => " Planet Express janitor",
                "origin" => "Earth",
                "image" => $dirImage . "/Scruffy.png"
            ],
        ];
    }
}
