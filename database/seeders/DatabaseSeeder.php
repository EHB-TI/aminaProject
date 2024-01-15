<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\FaqCategory;
use App\Models\CommentReply;
use App\Models\Faq;
use App\Models\Comment;
use App\Models\Profile;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Inserting data into 'users' table
        $this->insertUser('Admin', 'admin@ehb.be', 'Password!321', true);
        $this->insertUser('User', 'user@ehb.com', 'Password123', false);

        // Inserting data into 'faq_categories' table
        $this->insertFaqCategory('Catégorie 1');

        // Inserting data into 'comment_replies' table
        $this->insertCommentReply(1, 1, 'Réponse à un commentaire');

        // Inserting data into 'faqs' table
        $this->insertFaq(1, 'Question 1', 'Réponse à la question 1');

        // Inserting data into 'comments' table
        $this->insertComment(1, 'Commentaire de l\'utilisateur 1');

        // Inserting data into 'profiles' table
        $this->insertProfile(1, '', 'Hallo, ik ben Amina', '2000-01-01', 'Admin', 'Ben Taher', 'male');
    }

    private function insertUser($name, $email, $password, $isAdmin)
    {
        $user = User::where('email', $email)->first();
        if (!$user) {
            User::create([
                'name' => $name,
                'email' => $email,
                'email_verified_at' => now(),
                'password' => Hash::make($password),
                'remember_token' => Str::random(10),
                'is_admin' => $isAdmin,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    private function insertFaqCategory($name)
    {
        $category = FaqCategory::where('name', $name)->first();
        if (!$category) {
            FaqCategory::create([
                'name' => $name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    private function insertCommentReply($commentId, $userId, $body)
    {
        $reply = CommentReply::where('comment_id', $commentId)->where('user_id', $userId)->first();
        if (!$reply) {
            CommentReply::create([
                'comment_id' => $commentId,
                'user_id' => $userId,
                'body' => $body,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    private function insertFaq($categoryId, $question, $answer)
    {
        $faq = Faq::where('question', $question)->first();
        if (!$faq) {
            Faq::create([
                'faq_category_id' => $categoryId,
                'question' => $question,
                'answer' => $answer,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    private function insertComment($userId, $body)
    {
        $comment = Comment::where('user_id', $userId)->where('body', $body)->first();
        if (!$comment) {
            Comment::create([
                'user_id' => $userId,
                'body' => $body,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    private function insertProfile($userId, $photo, $bio, $birthdate, $firstname, $lastname, $sex)
    {
        $profile = Profile::where('user_id', $userId)->first();
        if (!$profile) {
            Profile::create([
                'user_id' => $userId,
                'profile_photo' => $photo,
                'biography' => $bio,
                'birthdate' => $birthdate,
                'firstname' => $firstname,
                'lastname' => $lastname,
                'sex' => $sex,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
               
