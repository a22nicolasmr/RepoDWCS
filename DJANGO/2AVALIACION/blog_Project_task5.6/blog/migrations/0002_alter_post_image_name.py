# Generated by Django 4.2.19 on 2025-02-10 09:38

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('blog', '0001_initial'),
    ]

    operations = [
        migrations.AlterField(
            model_name='post',
            name='image_name',
            field=models.ImageField(max_length=255, upload_to=''),
        ),
    ]
