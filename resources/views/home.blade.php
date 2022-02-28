@extends('layouts.app')

@section('content')
      <section id="contact" class="contact">
          <div class="container">
              <div class="mb-3">
              @if(session()->has('message'))
                  <div class="alert alert-success">
                      {{ session()->get('message') }}
                  </div>
              @elseif(session()->has('error'))
                  <div class="alert alert-danger">
                      {{ session()->get('message') }}
                  </div>
              @endif
              </div>
          </div>
      </section>
      <div class="container">
        @if (Auth::user()->id == 1)
        <div class="row stat-cards">
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon primary">
                <i data-feather="bar-chart-2" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">{{ $user }}</p>
                <p class="stat-cards-info__title">Total Users</p>
                <p class="stat-cards-info__progress">
                  <span class="stat-cards-info__profit success">
                    <i data-feather="trending-up" aria-hidden="true"></i>4.07%
                  </span>
                  Last month
                </p>
              </div>
            </article>
          </div>
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon warning">
                <i data-feather="file" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">{{ $application }}</p>
                <p class="stat-cards-info__title">Total Appointments</p>
                <p class="stat-cards-info__progress">
                  <span class="stat-cards-info__profit success">
                    <i data-feather="trending-up" aria-hidden="true"></i>0.24%
                  </span>
                  Last month
                </p>
              </div>
            </article>
          </div>
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon purple">
                <i data-feather="file" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">{{ $applicationActive }}</p>
                <p class="stat-cards-info__title">Active Appointments</p>
                <p class="stat-cards-info__progress">
                  <span class="stat-cards-info__profit danger">
                    <i data-feather="trending-down" aria-hidden="true"></i>0.00%
                  </span>
                  Last month
                </p>
              </div>
            </article>
          </div>
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon success">
                <i data-feather="feather" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">{{ $applicationCancelled }}</p>
                <p class="stat-cards-info__title">Cancelled Appointments</p>
                <p class="stat-cards-info__progress">
                  <span class="stat-cards-info__profit warning">
                    <i data-feather="trending-up" aria-hidden="true"></i>0.00%
                  </span>
                  Last month
                </p>
              </div>
            </article>
          </div>
        </div>
        @else
       <table style="width: 100%;" cellpadding="0" cellspacing="0">
          <tr>
              <td style="text-align: center; height: 80px;" class="headerStyle"><h4>Welcome to NARAYANI DENTAL & SKIN CENTER</h4>
              </td>
          </tr>
        <tr><td>&nbsp;</td></tr>
        </table>
        @endif
      </div>
    
@endsection