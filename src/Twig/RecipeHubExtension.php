<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class RecipeHubExtension extends AbstractExtension
{
   
    public function getFilters(): array
    {
        return [
            new TwigFilter('time_ago', [$this, 'formatTimeAgo']),
            new TwigFilter('cooking_time_format', [$this, 'formatCookingTime']),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('difficulty_stars', [$this, 'getStars'], ['is_safe' => ['html']]),
        ];
    }

    
    public function formatTimeAgo(\DateTimeInterface $date): string
    {
        $now = new \DateTime();
        $diff = $now->diff($date);

        if ($diff->y > 0) return "il y a " . $diff->y . " an(s)";
        if ($diff->m > 0) return "il y a " . $diff->m . " mois";
        if ($diff->d > 0) return "il y a " . $diff->d . " jour(s)";
        if ($diff->h > 0) return "il y a " . $diff->h . " heure(s)";
        return "il y a " . $diff->i . " minute(s)";
    }

    public function formatCookingTime(int $minutes): string
    {
        if ($minutes < 60) {
            return $minutes . "min";
        }

        $hours = floor($minutes / 60);
        $remainingMinutes = $minutes % 60;

        if ($remainingMinutes === 0) {
            return $hours . "h";
        }

        return $hours . "h" . str_pad($remainingMinutes, 2, '0', STR_PAD_LEFT);
    }
public function getStars(string $difficulty): string
{
    return match($difficulty) {
        'facile'    => '⭐',
        'moyen'     => '⭐⭐',
        'difficile' => '⭐⭐⭐',
        default     => ''
    };
}
}