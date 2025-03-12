# Generated by Django 4.2.19 on 2025-03-12 16:06

import django.core.validators
from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Degree',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.CharField(max_length=100)),
                ('description', models.TextField(validators=[django.core.validators.MinValueValidator(0), django.core.validators.MaxValueValidator(4)])),
                ('years', models.IntegerField()),
            ],
        ),
        migrations.CreateModel(
            name='Student',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.CharField(max_length=100)),
                ('surname', models.CharField(max_length=100)),
                ('image', models.ImageField(upload_to='final/images')),
                ('slug', models.SlugField(default='', unique=True)),
                ('finished_degree', models.BooleanField()),
                ('degree', models.ForeignKey(null=True, on_delete=django.db.models.deletion.CASCADE, related_name='fkdegree', to='final.degree')),
            ],
        ),
    ]
