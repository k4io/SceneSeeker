﻿using SceneSeeker.ViewModels;
using System.ComponentModel;
using Xamarin.Forms;

namespace SceneSeeker.Views
{
    public partial class ItemDetailPage : ContentPage
    {
        public ItemDetailPage()
        {
            InitializeComponent();
            BindingContext = new ItemDetailViewModel();
        }
    }
}