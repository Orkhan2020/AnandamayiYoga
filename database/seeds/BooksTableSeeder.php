<?php

use Illuminate\Database\Seeder;
use App\Book;

class BooksTableSeeder extends Seeder
{
    public function run()
    {
    	Book::create([
    		'title' => 'Sun Salutation',
            'subtitle' => 'a guide to turn your practice into a moving meditation',
    		'description' => '<div>Sun Salutation or Surya Namaskar is a sequence of gracefully linked Yoga postures (asanas) performed in a continuous flow along with breath control. In Sanskrit, Surya means “sun” and Namaskar means “to bow down”. Thus, Surya Namaskar is a devotional practice of bowing down to the sun, this light-bringer and most important source of energy for life on planet Earth.<br><br>The Sun Salutation practice started during the Vedic period (c. 1500 – c. 600 BCE). Back then, ancient rituals were done outdoors facing east at sunrise and sunset, with lots of mantras from the Vedas (sacred texts of early Hinduism).<br><br>However, somewhere along the way, the essential part of the original Namaskar sequence was lost: the understanding of the practice as a moving meditation to connect with the sun\'s nourishing energy, a source of wisdom, health, mental clarity, and creativity. Many Yoga practitioners use this elevated practice only as a warm-up exercise to start classes, abandoning the original meaning of the sequence.<br><br>This book is a guide for you to understand the essence of the Sun Salutations as a devotional moving meditation. As you learn to perform the Sun Salutation as a moving meditation, you flow into the harmony of the celestial spheres, raising your state of consciousness and awakening your inner sun. Each asana becomes a gateway to align yourself with the divine geometry, leading you to acquire the characteristics of order and divinity.</div>',
    		'lang' => 'en',
    		'image_path' => 'app/demo/books/sun-salutation.jpg'
    	]);

    	Book::create([
    		'title' => 'The 46 Benefits of Yoga',
            'subtitle' => 'taking care of your physical, mental and spiritual health',
    		'description' => '<div>The art of Yoga can be described as a group of physical, mental, and spiritual practices aimed to purify and transform the mind, invoking a shift in our consciousness to higher levels of perception, gradually awakening the divine spiritual essence within. Apart from its spiritual philosophy, Yoga has been used as therapeutic support to prevent and treat diseases at various levels. Yoga therapy encourages the integration of the body and mind, using asanas, pranayamas, and meditation to improve mental and physical health. Yoga therapy is emerging as an effective treatment for several health conditions such as stress, chronic pain, Post-Traumatic Stress Disorder (PTSD), insomnia, infertility, diabetes, allergies, asthma, osteoporosis, fatigue, depression, anxiety, low self-esteem, drug addiction, and migraines.<br><br>Scientific studies of Yoga demonstrate that mental and physical health are not just closely allied, but are essentially equivalent. Yoga’s healing power is due to it aligning and harmonizing the body and mind, stabilizing the nervous and gradually changing the way you move, breathe and think.<br><br> There are countless benefits of Yoga. In this book, the author provides an overview of the 46 most important benefits that regular Yoga practice can bring to your life on physical, mental and spiritual levels. All the research includes the scientific references to ensure that the reader is getting evidence-based information on the different health topics.</div>',
    		'lang' => 'en',
    		'image_path' => 'app/demo/books/benefits.jpg'
    	]);
    }
}
