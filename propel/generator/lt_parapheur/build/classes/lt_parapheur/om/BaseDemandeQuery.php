<?php


/**
 * Base class that represents a query for the 'demande' table.
 *
 * 
 *
 * @method DemandeQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method DemandeQuery orderByIdAgent($order = Criteria::ASC) Order by the ID_AGENT column
 * @method DemandeQuery orderByIdCommune($order = Criteria::ASC) Order by the ID_COMMUNE column
 * @method DemandeQuery orderByIdService($order = Criteria::ASC) Order by the ID_SERVICE column
 * @method DemandeQuery orderByIdEntite($order = Criteria::ASC) Order by the ID_ENTITE column
 * @method DemandeQuery orderByIdOrganisme($order = Criteria::ASC) Order by the ID_ORGANISME column
 * @method DemandeQuery orderByNumeroDemande($order = Criteria::ASC) Order by the NUMERO_DEMANDE column
 * @method DemandeQuery orderByDetailDemande($order = Criteria::ASC) Order by the DETAIL_DEMANDE column
 * @method DemandeQuery orderByStatutDemande($order = Criteria::ASC) Order by the STATUT_DEMANDE column
 * @method DemandeQuery orderByLatitudeDemande($order = Criteria::ASC) Order by the LATITUDE_DEMANDE column
 * @method DemandeQuery orderByLongitudeDemande($order = Criteria::ASC) Order by the LONGITUDE_DEMANDE column
 * @method DemandeQuery orderByAdresseDemande($order = Criteria::ASC) Order by the ADRESSE_DEMANDE column
 * @method DemandeQuery orderByIdPieceJointeDemande($order = Criteria::ASC) Order by the ID_PIECE_JOINTE_DEMANDE column
 * @method DemandeQuery orderByNomPieceJointeDemande($order = Criteria::ASC) Order by the NOM_PIECE_JOINTE_DEMANDE column
 * @method DemandeQuery orderByRevision($order = Criteria::ASC) Order by the REVISION column
 * @method DemandeQuery orderByContenuPieceJointe($order = Criteria::ASC) Order by the CONTENU_PIECE_JOINTE column
 * @method DemandeQuery orderByNomCitoyen($order = Criteria::ASC) Order by the NOM_CITOYEN column
 * @method DemandeQuery orderByPrenomCitoyen($order = Criteria::ASC) Order by the PRENOM_CITOYEN column
 * @method DemandeQuery orderByEmailCitoyen($order = Criteria::ASC) Order by the EMAIL_CITOYEN column
 * @method DemandeQuery orderByTelCitoyen($order = Criteria::ASC) Order by the TEL_CITOYEN column
 * @method DemandeQuery orderByTelephonePortable($order = Criteria::ASC) Order by the TELEPHONE_PORTABLE column
 * @method DemandeQuery orderByAdresseCitoyen1($order = Criteria::ASC) Order by the ADRESSE_CITOYEN_1 column
 * @method DemandeQuery orderByAdresseCitoyen2($order = Criteria::ASC) Order by the ADRESSE_CITOYEN_2 column
 * @method DemandeQuery orderByCodePostalCitoyen($order = Criteria::ASC) Order by the CODE_POSTAL_CITOYEN column
 * @method DemandeQuery orderByLocaliteCitoyen($order = Criteria::ASC) Order by the LOCALITE_CITOYEN column
 * @method DemandeQuery orderByIdentifiantAppMobileCitoyen($order = Criteria::ASC) Order by the IDENTIFIANT_APP_MOBILE_CITOYEN column
 * @method DemandeQuery orderByTypeDevice($order = Criteria::ASC) Order by the TYPE_DEVICE column
 * @method DemandeQuery orderByDateDepotDemande($order = Criteria::ASC) Order by the DATE_DEPOT_DEMANDE column
 * @method DemandeQuery orderByDateTraitementDemande($order = Criteria::ASC) Order by the DATE_TRAITEMENT_DEMANDE column
 * @method DemandeQuery orderByDateClotureDemande($order = Criteria::ASC) Order by the DATE_CLOTURE_DEMANDE column
 * @method DemandeQuery orderByDateReouvertureDemande($order = Criteria::ASC) Order by the DATE_REOUVERTURE_DEMANDE column
 * @method DemandeQuery orderByDureeAvantTraitement($order = Criteria::ASC) Order by the DUREE_AVANT_TRAITEMENT column
 * @method DemandeQuery orderByDureeTraitement($order = Criteria::ASC) Order by the DUREE_TRAITEMENT column
 * @method DemandeQuery orderByMotifReouvertir($order = Criteria::ASC) Order by the MOTIF_REOUVERTIR column
 * @method DemandeQuery orderByCloturerPar($order = Criteria::ASC) Order by the CLOTURER_PAR column
 * @method DemandeQuery orderByPays($order = Criteria::ASC) Order by the PAYS column
 * @method DemandeQuery orderByNomAgentFr($order = Criteria::ASC) Order by the NOM_AGENT_FR column
 * @method DemandeQuery orderByNomAgentAr($order = Criteria::ASC) Order by the NOM_AGENT_AR column
 * @method DemandeQuery orderByIdThemeCitoyen($order = Criteria::ASC) Order by the ID_THEME_CITOYEN column
 * @method DemandeQuery orderByIdThemeEnCours($order = Criteria::ASC) Order by the ID_THEME_EN_COURS column
 * @method DemandeQuery orderByDateReponse($order = Criteria::ASC) Order by the DATE_REPONSE column
 * @method DemandeQuery orderByDateStatut($order = Criteria::ASC) Order by the DATE_STATUT column
 * @method DemandeQuery orderByIdRegionAffectation($order = Criteria::ASC) Order by the ID_REGION_AFFECTATION column
 * @method DemandeQuery orderByIdProvinceAffectation($order = Criteria::ASC) Order by the ID_PROVINCE_AFFECTATION column
 * @method DemandeQuery orderByIdCommuneAffectation($order = Criteria::ASC) Order by the ID_COMMUNE_AFFECTATION column
 * @method DemandeQuery orderByOrganisation($order = Criteria::ASC) Order by the ORGANISATION column
 * @method DemandeQuery orderByIdOrigine($order = Criteria::ASC) Order by the ID_ORIGINE column
 * @method DemandeQuery orderByIdAgentCreateur($order = Criteria::ASC) Order by the ID_AGENT_CREATEUR column
 * @method DemandeQuery orderByIdEntiteCreatrice($order = Criteria::ASC) Order by the ID_ENTITE_CREATRICE column
 * @method DemandeQuery orderBySupprime($order = Criteria::ASC) Order by the SUPPRIME column
 * @method DemandeQuery orderBySource($order = Criteria::ASC) Order by the SOURCE column
 * @method DemandeQuery orderByDetailSource($order = Criteria::ASC) Order by the DETAIL_SOURCE column
 * @method DemandeQuery orderByFormat($order = Criteria::ASC) Order by the FORMAT column
 * @method DemandeQuery orderByReferenceInterne($order = Criteria::ASC) Order by the REFERENCE_INTERNE column
 * @method DemandeQuery orderByIdRegion($order = Criteria::ASC) Order by the ID_REGION column
 * @method DemandeQuery orderByIdProvince($order = Criteria::ASC) Order by the ID_PROVINCE column
 * @method DemandeQuery orderByIdPays($order = Criteria::ASC) Order by the ID_PAYS column
 * @method DemandeQuery orderByDateCreationDemande($order = Criteria::ASC) Order by the DATE_CREATION_DEMANDE column
 * @method DemandeQuery orderByIdEntiteConcernee($order = Criteria::ASC) Order by the ID_ENTITE_CONCERNEE column
 * @method DemandeQuery orderByNomEntiteConcerneeFr($order = Criteria::ASC) Order by the NOM_ENTITE_CONCERNEE_FR column
 * @method DemandeQuery orderByNomEntiteConcerneeAr($order = Criteria::ASC) Order by the NOM_ENTITE_CONCERNEE_AR column
 * @method DemandeQuery orderByIdEntiteConcerneeCitoyen($order = Criteria::ASC) Order by the ID_ENTITE_CONCERNEE_CITOYEN column
 * @method DemandeQuery orderByNomEntiteConcerneeCitoyenFr($order = Criteria::ASC) Order by the NOM_ENTITE_CONCERNEE_CITOYEN_FR column
 * @method DemandeQuery orderByNomEntiteConcerneeCitoyenAr($order = Criteria::ASC) Order by the NOM_ENTITE_CONCERNEE_CITOYEN_AR column
 * @method DemandeQuery orderByTypeRequerant($order = Criteria::ASC) Order by the TYPE_REQUERANT column
 * @method DemandeQuery orderByCanalDepot($order = Criteria::ASC) Order by the CANAL_DEPOT column
 * @method DemandeQuery orderByIdExterne($order = Criteria::ASC) Order by the ID_EXTERNE column
 * @method DemandeQuery orderByDateEnvoiReponse($order = Criteria::ASC) Order by the DATE_ENVOI_REPONSE column
 * @method DemandeQuery orderByEtatEnvoiReponse($order = Criteria::ASC) Order by the ETAT_ENVOI_REPONSE column
 * @method DemandeQuery orderByEtatEnvoi($order = Criteria::ASC) Order by the ETAT_ENVOI column
 * @method DemandeQuery orderByDateEnvoi($order = Criteria::ASC) Order by the DATE_ENVOI column
 * @method DemandeQuery orderByNumeroExterne($order = Criteria::ASC) Order by the NUMERO_EXTERNE column
 * @method DemandeQuery orderByObjetDemande($order = Criteria::ASC) Order by the OBJET_DEMANDE column
 * @method DemandeQuery orderByTagInterface($order = Criteria::ASC) Order by the TAG_INTERFACE column
 * @method DemandeQuery orderByChampSupp1($order = Criteria::ASC) Order by the CHAMP_SUPP_1 column
 * @method DemandeQuery orderByChampSupp2($order = Criteria::ASC) Order by the CHAMP_SUPP_2 column
 * @method DemandeQuery orderByChampSupp3($order = Criteria::ASC) Order by the CHAMP_SUPP_3 column
 * @method DemandeQuery orderByChampSupp4($order = Criteria::ASC) Order by the CHAMP_SUPP_4 column
 * @method DemandeQuery orderByChampSupp5($order = Criteria::ASC) Order by the CHAMP_SUPP_5 column
 * @method DemandeQuery orderByTypeDemande($order = Criteria::ASC) Order by the TYPE_DEMANDE column
 * @method DemandeQuery orderByIdAgentDestinataire($order = Criteria::ASC) Order by the ID_AGENT_DESTINATAIRE column
 * @method DemandeQuery orderByNomAgentDestinataireFr($order = Criteria::ASC) Order by the NOM_AGENT_DESTINATAIRE_FR column
 * @method DemandeQuery orderByPrenomAgentDestinataireFr($order = Criteria::ASC) Order by the PRENOM_AGENT_DESTINATAIRE_FR column
 * @method DemandeQuery orderByNomAgentDestinataireAr($order = Criteria::ASC) Order by the NOM_AGENT_DESTINATAIRE_AR column
 * @method DemandeQuery orderByPrenomAgentDestinataireAr($order = Criteria::ASC) Order by the PRENOM_AGENT_DESTINATAIRE_AR column
 * @method DemandeQuery orderByIdAgentSignataire($order = Criteria::ASC) Order by the ID_AGENT_SIGNATAIRE column
 * @method DemandeQuery orderByNomAgentSignataireFr($order = Criteria::ASC) Order by the NOM_AGENT_SIGNATAIRE_FR column
 * @method DemandeQuery orderByNomAgentSignataireAr($order = Criteria::ASC) Order by the NOM_AGENT_SIGNATAIRE_AR column
 * @method DemandeQuery orderByPrenomAgentSignataireAr($order = Criteria::ASC) Order by the PRENOM_AGENT_SIGNATAIRE_AR column
 * @method DemandeQuery orderByPrenomAgentSignataireFr($order = Criteria::ASC) Order by the PRENOM_AGENT_SIGNATAIRE_FR column
 * @method DemandeQuery orderByIdAgentEmetteur($order = Criteria::ASC) Order by the ID_AGENT_EMETTEUR column
 * @method DemandeQuery orderByNomAgentEmetteurFr($order = Criteria::ASC) Order by the NOM_AGENT_EMETTEUR_FR column
 * @method DemandeQuery orderByNomAgentEmetteurAr($order = Criteria::ASC) Order by the NOM_AGENT_EMETTEUR_AR column
 * @method DemandeQuery orderByPrenomAgentEmetteurAr($order = Criteria::ASC) Order by the PRENOM_AGENT_EMETTEUR_AR column
 * @method DemandeQuery orderByPrenomAgentEmetteurFr($order = Criteria::ASC) Order by the PRENOM_AGENT_EMETTEUR_FR column
 * @method DemandeQuery orderByReponseObligatoire($order = Criteria::ASC) Order by the REPONSE_OBLIGATOIRE column
 * @method DemandeQuery orderByCodeDemande($order = Criteria::ASC) Order by the CODE_DEMANDE column
 * @method DemandeQuery orderByCodeProvisoire($order = Criteria::ASC) Order by the CODE_PROVISOIRE column
 * @method DemandeQuery orderByTagGateway($order = Criteria::ASC) Order by the TAG_GATEWAY column
 * @method DemandeQuery orderByIdUtilisateurGateway($order = Criteria::ASC) Order by the ID_UTILISATEUR_GATEWAY column
 * @method DemandeQuery orderByChampSuppTheme1($order = Criteria::ASC) Order by the CHAMP_SUPP_THEME_1 column
 * @method DemandeQuery orderByChampSuppTheme2($order = Criteria::ASC) Order by the CHAMP_SUPP_THEME_2 column
 * @method DemandeQuery orderByChampSuppTheme3($order = Criteria::ASC) Order by the CHAMP_SUPP_THEME_3 column
 * @method DemandeQuery orderByChampSuppTheme4($order = Criteria::ASC) Order by the CHAMP_SUPP_THEME_4 column
 * @method DemandeQuery orderByChampSuppTheme5($order = Criteria::ASC) Order by the CHAMP_SUPP_THEME_5 column
 * @method DemandeQuery orderByIdTypeTheme($order = Criteria::ASC) Order by the ID_TYPE_THEME column
 * @method DemandeQuery orderByIdEtapeEnCours($order = Criteria::ASC) Order by the ID_ETAPE_EN_COURS column
 * @method DemandeQuery orderByNumeroEtapeEncours($order = Criteria::ASC) Order by the NUMERO_ETAPE_ENCOURS column
 * @method DemandeQuery orderByNombreEtapes($order = Criteria::ASC) Order by the NOMBRE_ETAPES column
 * @method DemandeQuery orderByDernierMessage($order = Criteria::ASC) Order by the DERNIER_MESSAGE column
 * @method DemandeQuery orderByLibelleEtapeEncours($order = Criteria::ASC) Order by the LIBELLE_ETAPE_ENCOURS column
 * @method DemandeQuery orderByDernierActeur($order = Criteria::ASC) Order by the DERNIER_ACTEUR column
 * @method DemandeQuery orderByDateReponseEtape($order = Criteria::ASC) Order by the DATE_REPONSE_ETAPE column
 * @method DemandeQuery orderByIdEntiteRelance($order = Criteria::ASC) Order by the ID_ENTITE_RELANCE column
 * @method DemandeQuery orderByIdAgentRelance($order = Criteria::ASC) Order by the ID_AGENT_RELANCE column
 * @method DemandeQuery orderByImportant($order = Criteria::ASC) Order by the IMPORTANT column
 * @method DemandeQuery orderByDateEcheanceReponseProche($order = Criteria::ASC) Order by the DATE_ECHEANCE_REPONSE_PROCHE column
 * @method DemandeQuery orderByUrlExterne($order = Criteria::ASC) Order by the URL_EXTERNE column
 * @method DemandeQuery orderByClotureAutomatique($order = Criteria::ASC) Order by the CLOTURE_AUTOMATIQUE column
 * @method DemandeQuery orderByDelaiTraitementOuvrable($order = Criteria::ASC) Order by the DELAI_TRAITEMENT_OUVRABLE column
 * @method DemandeQuery orderByActeurExterne($order = Criteria::ASC) Order by the ACTEUR_EXTERNE column
 * @method DemandeQuery orderByDelaiTraitement($order = Criteria::ASC) Order by the DELAI_TRAITEMENT column
 * @method DemandeQuery orderByObjetModifie($order = Criteria::ASC) Order by the OBJET_MODIFIE column
 * @method DemandeQuery orderByConfidentiel($order = Criteria::ASC) Order by the CONFIDENTIEL column
 * @method DemandeQuery orderByDelaiComplement($order = Criteria::ASC) Order by the DELAI_COMPLEMENT column
 * @method DemandeQuery orderByErreursDetectes($order = Criteria::ASC) Order by the ERREURS_DETECTES column
 * @method DemandeQuery orderByIdDemandeOrigine($order = Criteria::ASC) Order by the ID_DEMANDE_ORIGINE column
 *
 * @method DemandeQuery groupById() Group by the ID column
 * @method DemandeQuery groupByIdAgent() Group by the ID_AGENT column
 * @method DemandeQuery groupByIdCommune() Group by the ID_COMMUNE column
 * @method DemandeQuery groupByIdService() Group by the ID_SERVICE column
 * @method DemandeQuery groupByIdEntite() Group by the ID_ENTITE column
 * @method DemandeQuery groupByIdOrganisme() Group by the ID_ORGANISME column
 * @method DemandeQuery groupByNumeroDemande() Group by the NUMERO_DEMANDE column
 * @method DemandeQuery groupByDetailDemande() Group by the DETAIL_DEMANDE column
 * @method DemandeQuery groupByStatutDemande() Group by the STATUT_DEMANDE column
 * @method DemandeQuery groupByLatitudeDemande() Group by the LATITUDE_DEMANDE column
 * @method DemandeQuery groupByLongitudeDemande() Group by the LONGITUDE_DEMANDE column
 * @method DemandeQuery groupByAdresseDemande() Group by the ADRESSE_DEMANDE column
 * @method DemandeQuery groupByIdPieceJointeDemande() Group by the ID_PIECE_JOINTE_DEMANDE column
 * @method DemandeQuery groupByNomPieceJointeDemande() Group by the NOM_PIECE_JOINTE_DEMANDE column
 * @method DemandeQuery groupByRevision() Group by the REVISION column
 * @method DemandeQuery groupByContenuPieceJointe() Group by the CONTENU_PIECE_JOINTE column
 * @method DemandeQuery groupByNomCitoyen() Group by the NOM_CITOYEN column
 * @method DemandeQuery groupByPrenomCitoyen() Group by the PRENOM_CITOYEN column
 * @method DemandeQuery groupByEmailCitoyen() Group by the EMAIL_CITOYEN column
 * @method DemandeQuery groupByTelCitoyen() Group by the TEL_CITOYEN column
 * @method DemandeQuery groupByTelephonePortable() Group by the TELEPHONE_PORTABLE column
 * @method DemandeQuery groupByAdresseCitoyen1() Group by the ADRESSE_CITOYEN_1 column
 * @method DemandeQuery groupByAdresseCitoyen2() Group by the ADRESSE_CITOYEN_2 column
 * @method DemandeQuery groupByCodePostalCitoyen() Group by the CODE_POSTAL_CITOYEN column
 * @method DemandeQuery groupByLocaliteCitoyen() Group by the LOCALITE_CITOYEN column
 * @method DemandeQuery groupByIdentifiantAppMobileCitoyen() Group by the IDENTIFIANT_APP_MOBILE_CITOYEN column
 * @method DemandeQuery groupByTypeDevice() Group by the TYPE_DEVICE column
 * @method DemandeQuery groupByDateDepotDemande() Group by the DATE_DEPOT_DEMANDE column
 * @method DemandeQuery groupByDateTraitementDemande() Group by the DATE_TRAITEMENT_DEMANDE column
 * @method DemandeQuery groupByDateClotureDemande() Group by the DATE_CLOTURE_DEMANDE column
 * @method DemandeQuery groupByDateReouvertureDemande() Group by the DATE_REOUVERTURE_DEMANDE column
 * @method DemandeQuery groupByDureeAvantTraitement() Group by the DUREE_AVANT_TRAITEMENT column
 * @method DemandeQuery groupByDureeTraitement() Group by the DUREE_TRAITEMENT column
 * @method DemandeQuery groupByMotifReouvertir() Group by the MOTIF_REOUVERTIR column
 * @method DemandeQuery groupByCloturerPar() Group by the CLOTURER_PAR column
 * @method DemandeQuery groupByPays() Group by the PAYS column
 * @method DemandeQuery groupByNomAgentFr() Group by the NOM_AGENT_FR column
 * @method DemandeQuery groupByNomAgentAr() Group by the NOM_AGENT_AR column
 * @method DemandeQuery groupByIdThemeCitoyen() Group by the ID_THEME_CITOYEN column
 * @method DemandeQuery groupByIdThemeEnCours() Group by the ID_THEME_EN_COURS column
 * @method DemandeQuery groupByDateReponse() Group by the DATE_REPONSE column
 * @method DemandeQuery groupByDateStatut() Group by the DATE_STATUT column
 * @method DemandeQuery groupByIdRegionAffectation() Group by the ID_REGION_AFFECTATION column
 * @method DemandeQuery groupByIdProvinceAffectation() Group by the ID_PROVINCE_AFFECTATION column
 * @method DemandeQuery groupByIdCommuneAffectation() Group by the ID_COMMUNE_AFFECTATION column
 * @method DemandeQuery groupByOrganisation() Group by the ORGANISATION column
 * @method DemandeQuery groupByIdOrigine() Group by the ID_ORIGINE column
 * @method DemandeQuery groupByIdAgentCreateur() Group by the ID_AGENT_CREATEUR column
 * @method DemandeQuery groupByIdEntiteCreatrice() Group by the ID_ENTITE_CREATRICE column
 * @method DemandeQuery groupBySupprime() Group by the SUPPRIME column
 * @method DemandeQuery groupBySource() Group by the SOURCE column
 * @method DemandeQuery groupByDetailSource() Group by the DETAIL_SOURCE column
 * @method DemandeQuery groupByFormat() Group by the FORMAT column
 * @method DemandeQuery groupByReferenceInterne() Group by the REFERENCE_INTERNE column
 * @method DemandeQuery groupByIdRegion() Group by the ID_REGION column
 * @method DemandeQuery groupByIdProvince() Group by the ID_PROVINCE column
 * @method DemandeQuery groupByIdPays() Group by the ID_PAYS column
 * @method DemandeQuery groupByDateCreationDemande() Group by the DATE_CREATION_DEMANDE column
 * @method DemandeQuery groupByIdEntiteConcernee() Group by the ID_ENTITE_CONCERNEE column
 * @method DemandeQuery groupByNomEntiteConcerneeFr() Group by the NOM_ENTITE_CONCERNEE_FR column
 * @method DemandeQuery groupByNomEntiteConcerneeAr() Group by the NOM_ENTITE_CONCERNEE_AR column
 * @method DemandeQuery groupByIdEntiteConcerneeCitoyen() Group by the ID_ENTITE_CONCERNEE_CITOYEN column
 * @method DemandeQuery groupByNomEntiteConcerneeCitoyenFr() Group by the NOM_ENTITE_CONCERNEE_CITOYEN_FR column
 * @method DemandeQuery groupByNomEntiteConcerneeCitoyenAr() Group by the NOM_ENTITE_CONCERNEE_CITOYEN_AR column
 * @method DemandeQuery groupByTypeRequerant() Group by the TYPE_REQUERANT column
 * @method DemandeQuery groupByCanalDepot() Group by the CANAL_DEPOT column
 * @method DemandeQuery groupByIdExterne() Group by the ID_EXTERNE column
 * @method DemandeQuery groupByDateEnvoiReponse() Group by the DATE_ENVOI_REPONSE column
 * @method DemandeQuery groupByEtatEnvoiReponse() Group by the ETAT_ENVOI_REPONSE column
 * @method DemandeQuery groupByEtatEnvoi() Group by the ETAT_ENVOI column
 * @method DemandeQuery groupByDateEnvoi() Group by the DATE_ENVOI column
 * @method DemandeQuery groupByNumeroExterne() Group by the NUMERO_EXTERNE column
 * @method DemandeQuery groupByObjetDemande() Group by the OBJET_DEMANDE column
 * @method DemandeQuery groupByTagInterface() Group by the TAG_INTERFACE column
 * @method DemandeQuery groupByChampSupp1() Group by the CHAMP_SUPP_1 column
 * @method DemandeQuery groupByChampSupp2() Group by the CHAMP_SUPP_2 column
 * @method DemandeQuery groupByChampSupp3() Group by the CHAMP_SUPP_3 column
 * @method DemandeQuery groupByChampSupp4() Group by the CHAMP_SUPP_4 column
 * @method DemandeQuery groupByChampSupp5() Group by the CHAMP_SUPP_5 column
 * @method DemandeQuery groupByTypeDemande() Group by the TYPE_DEMANDE column
 * @method DemandeQuery groupByIdAgentDestinataire() Group by the ID_AGENT_DESTINATAIRE column
 * @method DemandeQuery groupByNomAgentDestinataireFr() Group by the NOM_AGENT_DESTINATAIRE_FR column
 * @method DemandeQuery groupByPrenomAgentDestinataireFr() Group by the PRENOM_AGENT_DESTINATAIRE_FR column
 * @method DemandeQuery groupByNomAgentDestinataireAr() Group by the NOM_AGENT_DESTINATAIRE_AR column
 * @method DemandeQuery groupByPrenomAgentDestinataireAr() Group by the PRENOM_AGENT_DESTINATAIRE_AR column
 * @method DemandeQuery groupByIdAgentSignataire() Group by the ID_AGENT_SIGNATAIRE column
 * @method DemandeQuery groupByNomAgentSignataireFr() Group by the NOM_AGENT_SIGNATAIRE_FR column
 * @method DemandeQuery groupByNomAgentSignataireAr() Group by the NOM_AGENT_SIGNATAIRE_AR column
 * @method DemandeQuery groupByPrenomAgentSignataireAr() Group by the PRENOM_AGENT_SIGNATAIRE_AR column
 * @method DemandeQuery groupByPrenomAgentSignataireFr() Group by the PRENOM_AGENT_SIGNATAIRE_FR column
 * @method DemandeQuery groupByIdAgentEmetteur() Group by the ID_AGENT_EMETTEUR column
 * @method DemandeQuery groupByNomAgentEmetteurFr() Group by the NOM_AGENT_EMETTEUR_FR column
 * @method DemandeQuery groupByNomAgentEmetteurAr() Group by the NOM_AGENT_EMETTEUR_AR column
 * @method DemandeQuery groupByPrenomAgentEmetteurAr() Group by the PRENOM_AGENT_EMETTEUR_AR column
 * @method DemandeQuery groupByPrenomAgentEmetteurFr() Group by the PRENOM_AGENT_EMETTEUR_FR column
 * @method DemandeQuery groupByReponseObligatoire() Group by the REPONSE_OBLIGATOIRE column
 * @method DemandeQuery groupByCodeDemande() Group by the CODE_DEMANDE column
 * @method DemandeQuery groupByCodeProvisoire() Group by the CODE_PROVISOIRE column
 * @method DemandeQuery groupByTagGateway() Group by the TAG_GATEWAY column
 * @method DemandeQuery groupByIdUtilisateurGateway() Group by the ID_UTILISATEUR_GATEWAY column
 * @method DemandeQuery groupByChampSuppTheme1() Group by the CHAMP_SUPP_THEME_1 column
 * @method DemandeQuery groupByChampSuppTheme2() Group by the CHAMP_SUPP_THEME_2 column
 * @method DemandeQuery groupByChampSuppTheme3() Group by the CHAMP_SUPP_THEME_3 column
 * @method DemandeQuery groupByChampSuppTheme4() Group by the CHAMP_SUPP_THEME_4 column
 * @method DemandeQuery groupByChampSuppTheme5() Group by the CHAMP_SUPP_THEME_5 column
 * @method DemandeQuery groupByIdTypeTheme() Group by the ID_TYPE_THEME column
 * @method DemandeQuery groupByIdEtapeEnCours() Group by the ID_ETAPE_EN_COURS column
 * @method DemandeQuery groupByNumeroEtapeEncours() Group by the NUMERO_ETAPE_ENCOURS column
 * @method DemandeQuery groupByNombreEtapes() Group by the NOMBRE_ETAPES column
 * @method DemandeQuery groupByDernierMessage() Group by the DERNIER_MESSAGE column
 * @method DemandeQuery groupByLibelleEtapeEncours() Group by the LIBELLE_ETAPE_ENCOURS column
 * @method DemandeQuery groupByDernierActeur() Group by the DERNIER_ACTEUR column
 * @method DemandeQuery groupByDateReponseEtape() Group by the DATE_REPONSE_ETAPE column
 * @method DemandeQuery groupByIdEntiteRelance() Group by the ID_ENTITE_RELANCE column
 * @method DemandeQuery groupByIdAgentRelance() Group by the ID_AGENT_RELANCE column
 * @method DemandeQuery groupByImportant() Group by the IMPORTANT column
 * @method DemandeQuery groupByDateEcheanceReponseProche() Group by the DATE_ECHEANCE_REPONSE_PROCHE column
 * @method DemandeQuery groupByUrlExterne() Group by the URL_EXTERNE column
 * @method DemandeQuery groupByClotureAutomatique() Group by the CLOTURE_AUTOMATIQUE column
 * @method DemandeQuery groupByDelaiTraitementOuvrable() Group by the DELAI_TRAITEMENT_OUVRABLE column
 * @method DemandeQuery groupByActeurExterne() Group by the ACTEUR_EXTERNE column
 * @method DemandeQuery groupByDelaiTraitement() Group by the DELAI_TRAITEMENT column
 * @method DemandeQuery groupByObjetModifie() Group by the OBJET_MODIFIE column
 * @method DemandeQuery groupByConfidentiel() Group by the CONFIDENTIEL column
 * @method DemandeQuery groupByDelaiComplement() Group by the DELAI_COMPLEMENT column
 * @method DemandeQuery groupByErreursDetectes() Group by the ERREURS_DETECTES column
 * @method DemandeQuery groupByIdDemandeOrigine() Group by the ID_DEMANDE_ORIGINE column
 *
 * @method DemandeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method DemandeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method DemandeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method DemandeQuery leftJoinTHistoriqueConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the THistoriqueConsultation relation
 * @method DemandeQuery rightJoinTHistoriqueConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the THistoriqueConsultation relation
 * @method DemandeQuery innerJoinTHistoriqueConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the THistoriqueConsultation relation
 *
 * @method Demande findOne(PropelPDO $con = null) Return the first Demande matching the query
 * @method Demande findOneOrCreate(PropelPDO $con = null) Return the first Demande matching the query, or a new Demande object populated from the query conditions when no match is found
 *
 * @method Demande findOneByIdAgent(int $ID_AGENT) Return the first Demande filtered by the ID_AGENT column
 * @method Demande findOneByIdCommune(int $ID_COMMUNE) Return the first Demande filtered by the ID_COMMUNE column
 * @method Demande findOneByIdService(int $ID_SERVICE) Return the first Demande filtered by the ID_SERVICE column
 * @method Demande findOneByIdEntite(int $ID_ENTITE) Return the first Demande filtered by the ID_ENTITE column
 * @method Demande findOneByIdOrganisme(int $ID_ORGANISME) Return the first Demande filtered by the ID_ORGANISME column
 * @method Demande findOneByNumeroDemande(string $NUMERO_DEMANDE) Return the first Demande filtered by the NUMERO_DEMANDE column
 * @method Demande findOneByDetailDemande(string $DETAIL_DEMANDE) Return the first Demande filtered by the DETAIL_DEMANDE column
 * @method Demande findOneByStatutDemande(int $STATUT_DEMANDE) Return the first Demande filtered by the STATUT_DEMANDE column
 * @method Demande findOneByLatitudeDemande(string $LATITUDE_DEMANDE) Return the first Demande filtered by the LATITUDE_DEMANDE column
 * @method Demande findOneByLongitudeDemande(string $LONGITUDE_DEMANDE) Return the first Demande filtered by the LONGITUDE_DEMANDE column
 * @method Demande findOneByAdresseDemande(string $ADRESSE_DEMANDE) Return the first Demande filtered by the ADRESSE_DEMANDE column
 * @method Demande findOneByIdPieceJointeDemande(int $ID_PIECE_JOINTE_DEMANDE) Return the first Demande filtered by the ID_PIECE_JOINTE_DEMANDE column
 * @method Demande findOneByNomPieceJointeDemande(string $NOM_PIECE_JOINTE_DEMANDE) Return the first Demande filtered by the NOM_PIECE_JOINTE_DEMANDE column
 * @method Demande findOneByRevision(int $REVISION) Return the first Demande filtered by the REVISION column
 * @method Demande findOneByContenuPieceJointe(string $CONTENU_PIECE_JOINTE) Return the first Demande filtered by the CONTENU_PIECE_JOINTE column
 * @method Demande findOneByNomCitoyen(string $NOM_CITOYEN) Return the first Demande filtered by the NOM_CITOYEN column
 * @method Demande findOneByPrenomCitoyen(string $PRENOM_CITOYEN) Return the first Demande filtered by the PRENOM_CITOYEN column
 * @method Demande findOneByEmailCitoyen(string $EMAIL_CITOYEN) Return the first Demande filtered by the EMAIL_CITOYEN column
 * @method Demande findOneByTelCitoyen(string $TEL_CITOYEN) Return the first Demande filtered by the TEL_CITOYEN column
 * @method Demande findOneByTelephonePortable(string $TELEPHONE_PORTABLE) Return the first Demande filtered by the TELEPHONE_PORTABLE column
 * @method Demande findOneByAdresseCitoyen1(string $ADRESSE_CITOYEN_1) Return the first Demande filtered by the ADRESSE_CITOYEN_1 column
 * @method Demande findOneByAdresseCitoyen2(string $ADRESSE_CITOYEN_2) Return the first Demande filtered by the ADRESSE_CITOYEN_2 column
 * @method Demande findOneByCodePostalCitoyen(string $CODE_POSTAL_CITOYEN) Return the first Demande filtered by the CODE_POSTAL_CITOYEN column
 * @method Demande findOneByLocaliteCitoyen(string $LOCALITE_CITOYEN) Return the first Demande filtered by the LOCALITE_CITOYEN column
 * @method Demande findOneByIdentifiantAppMobileCitoyen(string $IDENTIFIANT_APP_MOBILE_CITOYEN) Return the first Demande filtered by the IDENTIFIANT_APP_MOBILE_CITOYEN column
 * @method Demande findOneByTypeDevice(string $TYPE_DEVICE) Return the first Demande filtered by the TYPE_DEVICE column
 * @method Demande findOneByDateDepotDemande(string $DATE_DEPOT_DEMANDE) Return the first Demande filtered by the DATE_DEPOT_DEMANDE column
 * @method Demande findOneByDateTraitementDemande(string $DATE_TRAITEMENT_DEMANDE) Return the first Demande filtered by the DATE_TRAITEMENT_DEMANDE column
 * @method Demande findOneByDateClotureDemande(string $DATE_CLOTURE_DEMANDE) Return the first Demande filtered by the DATE_CLOTURE_DEMANDE column
 * @method Demande findOneByDateReouvertureDemande(string $DATE_REOUVERTURE_DEMANDE) Return the first Demande filtered by the DATE_REOUVERTURE_DEMANDE column
 * @method Demande findOneByDureeAvantTraitement(string $DUREE_AVANT_TRAITEMENT) Return the first Demande filtered by the DUREE_AVANT_TRAITEMENT column
 * @method Demande findOneByDureeTraitement(string $DUREE_TRAITEMENT) Return the first Demande filtered by the DUREE_TRAITEMENT column
 * @method Demande findOneByMotifReouvertir(string $MOTIF_REOUVERTIR) Return the first Demande filtered by the MOTIF_REOUVERTIR column
 * @method Demande findOneByCloturerPar(string $CLOTURER_PAR) Return the first Demande filtered by the CLOTURER_PAR column
 * @method Demande findOneByPays(string $PAYS) Return the first Demande filtered by the PAYS column
 * @method Demande findOneByNomAgentFr(string $NOM_AGENT_FR) Return the first Demande filtered by the NOM_AGENT_FR column
 * @method Demande findOneByNomAgentAr(string $NOM_AGENT_AR) Return the first Demande filtered by the NOM_AGENT_AR column
 * @method Demande findOneByIdThemeCitoyen(int $ID_THEME_CITOYEN) Return the first Demande filtered by the ID_THEME_CITOYEN column
 * @method Demande findOneByIdThemeEnCours(int $ID_THEME_EN_COURS) Return the first Demande filtered by the ID_THEME_EN_COURS column
 * @method Demande findOneByDateReponse(string $DATE_REPONSE) Return the first Demande filtered by the DATE_REPONSE column
 * @method Demande findOneByDateStatut(string $DATE_STATUT) Return the first Demande filtered by the DATE_STATUT column
 * @method Demande findOneByIdRegionAffectation(int $ID_REGION_AFFECTATION) Return the first Demande filtered by the ID_REGION_AFFECTATION column
 * @method Demande findOneByIdProvinceAffectation(int $ID_PROVINCE_AFFECTATION) Return the first Demande filtered by the ID_PROVINCE_AFFECTATION column
 * @method Demande findOneByIdCommuneAffectation(int $ID_COMMUNE_AFFECTATION) Return the first Demande filtered by the ID_COMMUNE_AFFECTATION column
 * @method Demande findOneByOrganisation(string $ORGANISATION) Return the first Demande filtered by the ORGANISATION column
 * @method Demande findOneByIdOrigine(int $ID_ORIGINE) Return the first Demande filtered by the ID_ORIGINE column
 * @method Demande findOneByIdAgentCreateur(int $ID_AGENT_CREATEUR) Return the first Demande filtered by the ID_AGENT_CREATEUR column
 * @method Demande findOneByIdEntiteCreatrice(int $ID_ENTITE_CREATRICE) Return the first Demande filtered by the ID_ENTITE_CREATRICE column
 * @method Demande findOneBySupprime(string $SUPPRIME) Return the first Demande filtered by the SUPPRIME column
 * @method Demande findOneBySource(int $SOURCE) Return the first Demande filtered by the SOURCE column
 * @method Demande findOneByDetailSource(string $DETAIL_SOURCE) Return the first Demande filtered by the DETAIL_SOURCE column
 * @method Demande findOneByFormat(int $FORMAT) Return the first Demande filtered by the FORMAT column
 * @method Demande findOneByReferenceInterne(string $REFERENCE_INTERNE) Return the first Demande filtered by the REFERENCE_INTERNE column
 * @method Demande findOneByIdRegion(int $ID_REGION) Return the first Demande filtered by the ID_REGION column
 * @method Demande findOneByIdProvince(int $ID_PROVINCE) Return the first Demande filtered by the ID_PROVINCE column
 * @method Demande findOneByIdPays(int $ID_PAYS) Return the first Demande filtered by the ID_PAYS column
 * @method Demande findOneByDateCreationDemande(string $DATE_CREATION_DEMANDE) Return the first Demande filtered by the DATE_CREATION_DEMANDE column
 * @method Demande findOneByIdEntiteConcernee(int $ID_ENTITE_CONCERNEE) Return the first Demande filtered by the ID_ENTITE_CONCERNEE column
 * @method Demande findOneByNomEntiteConcerneeFr(string $NOM_ENTITE_CONCERNEE_FR) Return the first Demande filtered by the NOM_ENTITE_CONCERNEE_FR column
 * @method Demande findOneByNomEntiteConcerneeAr(string $NOM_ENTITE_CONCERNEE_AR) Return the first Demande filtered by the NOM_ENTITE_CONCERNEE_AR column
 * @method Demande findOneByIdEntiteConcerneeCitoyen(int $ID_ENTITE_CONCERNEE_CITOYEN) Return the first Demande filtered by the ID_ENTITE_CONCERNEE_CITOYEN column
 * @method Demande findOneByNomEntiteConcerneeCitoyenFr(string $NOM_ENTITE_CONCERNEE_CITOYEN_FR) Return the first Demande filtered by the NOM_ENTITE_CONCERNEE_CITOYEN_FR column
 * @method Demande findOneByNomEntiteConcerneeCitoyenAr(string $NOM_ENTITE_CONCERNEE_CITOYEN_AR) Return the first Demande filtered by the NOM_ENTITE_CONCERNEE_CITOYEN_AR column
 * @method Demande findOneByTypeRequerant(int $TYPE_REQUERANT) Return the first Demande filtered by the TYPE_REQUERANT column
 * @method Demande findOneByCanalDepot(string $CANAL_DEPOT) Return the first Demande filtered by the CANAL_DEPOT column
 * @method Demande findOneByIdExterne(int $ID_EXTERNE) Return the first Demande filtered by the ID_EXTERNE column
 * @method Demande findOneByDateEnvoiReponse(string $DATE_ENVOI_REPONSE) Return the first Demande filtered by the DATE_ENVOI_REPONSE column
 * @method Demande findOneByEtatEnvoiReponse(string $ETAT_ENVOI_REPONSE) Return the first Demande filtered by the ETAT_ENVOI_REPONSE column
 * @method Demande findOneByEtatEnvoi(string $ETAT_ENVOI) Return the first Demande filtered by the ETAT_ENVOI column
 * @method Demande findOneByDateEnvoi(string $DATE_ENVOI) Return the first Demande filtered by the DATE_ENVOI column
 * @method Demande findOneByNumeroExterne(string $NUMERO_EXTERNE) Return the first Demande filtered by the NUMERO_EXTERNE column
 * @method Demande findOneByObjetDemande(string $OBJET_DEMANDE) Return the first Demande filtered by the OBJET_DEMANDE column
 * @method Demande findOneByTagInterface(string $TAG_INTERFACE) Return the first Demande filtered by the TAG_INTERFACE column
 * @method Demande findOneByChampSupp1(string $CHAMP_SUPP_1) Return the first Demande filtered by the CHAMP_SUPP_1 column
 * @method Demande findOneByChampSupp2(string $CHAMP_SUPP_2) Return the first Demande filtered by the CHAMP_SUPP_2 column
 * @method Demande findOneByChampSupp3(string $CHAMP_SUPP_3) Return the first Demande filtered by the CHAMP_SUPP_3 column
 * @method Demande findOneByChampSupp4(string $CHAMP_SUPP_4) Return the first Demande filtered by the CHAMP_SUPP_4 column
 * @method Demande findOneByChampSupp5(string $CHAMP_SUPP_5) Return the first Demande filtered by the CHAMP_SUPP_5 column
 * @method Demande findOneByTypeDemande(int $TYPE_DEMANDE) Return the first Demande filtered by the TYPE_DEMANDE column
 * @method Demande findOneByIdAgentDestinataire(int $ID_AGENT_DESTINATAIRE) Return the first Demande filtered by the ID_AGENT_DESTINATAIRE column
 * @method Demande findOneByNomAgentDestinataireFr(string $NOM_AGENT_DESTINATAIRE_FR) Return the first Demande filtered by the NOM_AGENT_DESTINATAIRE_FR column
 * @method Demande findOneByPrenomAgentDestinataireFr(string $PRENOM_AGENT_DESTINATAIRE_FR) Return the first Demande filtered by the PRENOM_AGENT_DESTINATAIRE_FR column
 * @method Demande findOneByNomAgentDestinataireAr(string $NOM_AGENT_DESTINATAIRE_AR) Return the first Demande filtered by the NOM_AGENT_DESTINATAIRE_AR column
 * @method Demande findOneByPrenomAgentDestinataireAr(string $PRENOM_AGENT_DESTINATAIRE_AR) Return the first Demande filtered by the PRENOM_AGENT_DESTINATAIRE_AR column
 * @method Demande findOneByIdAgentSignataire(int $ID_AGENT_SIGNATAIRE) Return the first Demande filtered by the ID_AGENT_SIGNATAIRE column
 * @method Demande findOneByNomAgentSignataireFr(string $NOM_AGENT_SIGNATAIRE_FR) Return the first Demande filtered by the NOM_AGENT_SIGNATAIRE_FR column
 * @method Demande findOneByNomAgentSignataireAr(string $NOM_AGENT_SIGNATAIRE_AR) Return the first Demande filtered by the NOM_AGENT_SIGNATAIRE_AR column
 * @method Demande findOneByPrenomAgentSignataireAr(string $PRENOM_AGENT_SIGNATAIRE_AR) Return the first Demande filtered by the PRENOM_AGENT_SIGNATAIRE_AR column
 * @method Demande findOneByPrenomAgentSignataireFr(string $PRENOM_AGENT_SIGNATAIRE_FR) Return the first Demande filtered by the PRENOM_AGENT_SIGNATAIRE_FR column
 * @method Demande findOneByIdAgentEmetteur(int $ID_AGENT_EMETTEUR) Return the first Demande filtered by the ID_AGENT_EMETTEUR column
 * @method Demande findOneByNomAgentEmetteurFr(string $NOM_AGENT_EMETTEUR_FR) Return the first Demande filtered by the NOM_AGENT_EMETTEUR_FR column
 * @method Demande findOneByNomAgentEmetteurAr(string $NOM_AGENT_EMETTEUR_AR) Return the first Demande filtered by the NOM_AGENT_EMETTEUR_AR column
 * @method Demande findOneByPrenomAgentEmetteurAr(string $PRENOM_AGENT_EMETTEUR_AR) Return the first Demande filtered by the PRENOM_AGENT_EMETTEUR_AR column
 * @method Demande findOneByPrenomAgentEmetteurFr(string $PRENOM_AGENT_EMETTEUR_FR) Return the first Demande filtered by the PRENOM_AGENT_EMETTEUR_FR column
 * @method Demande findOneByReponseObligatoire(string $REPONSE_OBLIGATOIRE) Return the first Demande filtered by the REPONSE_OBLIGATOIRE column
 * @method Demande findOneByCodeDemande(int $CODE_DEMANDE) Return the first Demande filtered by the CODE_DEMANDE column
 * @method Demande findOneByCodeProvisoire(int $CODE_PROVISOIRE) Return the first Demande filtered by the CODE_PROVISOIRE column
 * @method Demande findOneByTagGateway(string $TAG_GATEWAY) Return the first Demande filtered by the TAG_GATEWAY column
 * @method Demande findOneByIdUtilisateurGateway(string $ID_UTILISATEUR_GATEWAY) Return the first Demande filtered by the ID_UTILISATEUR_GATEWAY column
 * @method Demande findOneByChampSuppTheme1(string $CHAMP_SUPP_THEME_1) Return the first Demande filtered by the CHAMP_SUPP_THEME_1 column
 * @method Demande findOneByChampSuppTheme2(string $CHAMP_SUPP_THEME_2) Return the first Demande filtered by the CHAMP_SUPP_THEME_2 column
 * @method Demande findOneByChampSuppTheme3(string $CHAMP_SUPP_THEME_3) Return the first Demande filtered by the CHAMP_SUPP_THEME_3 column
 * @method Demande findOneByChampSuppTheme4(string $CHAMP_SUPP_THEME_4) Return the first Demande filtered by the CHAMP_SUPP_THEME_4 column
 * @method Demande findOneByChampSuppTheme5(string $CHAMP_SUPP_THEME_5) Return the first Demande filtered by the CHAMP_SUPP_THEME_5 column
 * @method Demande findOneByIdTypeTheme(int $ID_TYPE_THEME) Return the first Demande filtered by the ID_TYPE_THEME column
 * @method Demande findOneByIdEtapeEnCours(int $ID_ETAPE_EN_COURS) Return the first Demande filtered by the ID_ETAPE_EN_COURS column
 * @method Demande findOneByNumeroEtapeEncours(int $NUMERO_ETAPE_ENCOURS) Return the first Demande filtered by the NUMERO_ETAPE_ENCOURS column
 * @method Demande findOneByNombreEtapes(int $NOMBRE_ETAPES) Return the first Demande filtered by the NOMBRE_ETAPES column
 * @method Demande findOneByDernierMessage(string $DERNIER_MESSAGE) Return the first Demande filtered by the DERNIER_MESSAGE column
 * @method Demande findOneByLibelleEtapeEncours(string $LIBELLE_ETAPE_ENCOURS) Return the first Demande filtered by the LIBELLE_ETAPE_ENCOURS column
 * @method Demande findOneByDernierActeur(string $DERNIER_ACTEUR) Return the first Demande filtered by the DERNIER_ACTEUR column
 * @method Demande findOneByDateReponseEtape(string $DATE_REPONSE_ETAPE) Return the first Demande filtered by the DATE_REPONSE_ETAPE column
 * @method Demande findOneByIdEntiteRelance(int $ID_ENTITE_RELANCE) Return the first Demande filtered by the ID_ENTITE_RELANCE column
 * @method Demande findOneByIdAgentRelance(int $ID_AGENT_RELANCE) Return the first Demande filtered by the ID_AGENT_RELANCE column
 * @method Demande findOneByImportant(string $IMPORTANT) Return the first Demande filtered by the IMPORTANT column
 * @method Demande findOneByDateEcheanceReponseProche(string $DATE_ECHEANCE_REPONSE_PROCHE) Return the first Demande filtered by the DATE_ECHEANCE_REPONSE_PROCHE column
 * @method Demande findOneByUrlExterne(string $URL_EXTERNE) Return the first Demande filtered by the URL_EXTERNE column
 * @method Demande findOneByClotureAutomatique(string $CLOTURE_AUTOMATIQUE) Return the first Demande filtered by the CLOTURE_AUTOMATIQUE column
 * @method Demande findOneByDelaiTraitementOuvrable(int $DELAI_TRAITEMENT_OUVRABLE) Return the first Demande filtered by the DELAI_TRAITEMENT_OUVRABLE column
 * @method Demande findOneByActeurExterne(string $ACTEUR_EXTERNE) Return the first Demande filtered by the ACTEUR_EXTERNE column
 * @method Demande findOneByDelaiTraitement(int $DELAI_TRAITEMENT) Return the first Demande filtered by the DELAI_TRAITEMENT column
 * @method Demande findOneByObjetModifie(string $OBJET_MODIFIE) Return the first Demande filtered by the OBJET_MODIFIE column
 * @method Demande findOneByConfidentiel(string $CONFIDENTIEL) Return the first Demande filtered by the CONFIDENTIEL column
 * @method Demande findOneByDelaiComplement(int $DELAI_COMPLEMENT) Return the first Demande filtered by the DELAI_COMPLEMENT column
 * @method Demande findOneByErreursDetectes(string $ERREURS_DETECTES) Return the first Demande filtered by the ERREURS_DETECTES column
 * @method Demande findOneByIdDemandeOrigine(int $ID_DEMANDE_ORIGINE) Return the first Demande filtered by the ID_DEMANDE_ORIGINE column
 *
 * @method array findById(int $ID) Return Demande objects filtered by the ID column
 * @method array findByIdAgent(int $ID_AGENT) Return Demande objects filtered by the ID_AGENT column
 * @method array findByIdCommune(int $ID_COMMUNE) Return Demande objects filtered by the ID_COMMUNE column
 * @method array findByIdService(int $ID_SERVICE) Return Demande objects filtered by the ID_SERVICE column
 * @method array findByIdEntite(int $ID_ENTITE) Return Demande objects filtered by the ID_ENTITE column
 * @method array findByIdOrganisme(int $ID_ORGANISME) Return Demande objects filtered by the ID_ORGANISME column
 * @method array findByNumeroDemande(string $NUMERO_DEMANDE) Return Demande objects filtered by the NUMERO_DEMANDE column
 * @method array findByDetailDemande(string $DETAIL_DEMANDE) Return Demande objects filtered by the DETAIL_DEMANDE column
 * @method array findByStatutDemande(int $STATUT_DEMANDE) Return Demande objects filtered by the STATUT_DEMANDE column
 * @method array findByLatitudeDemande(string $LATITUDE_DEMANDE) Return Demande objects filtered by the LATITUDE_DEMANDE column
 * @method array findByLongitudeDemande(string $LONGITUDE_DEMANDE) Return Demande objects filtered by the LONGITUDE_DEMANDE column
 * @method array findByAdresseDemande(string $ADRESSE_DEMANDE) Return Demande objects filtered by the ADRESSE_DEMANDE column
 * @method array findByIdPieceJointeDemande(int $ID_PIECE_JOINTE_DEMANDE) Return Demande objects filtered by the ID_PIECE_JOINTE_DEMANDE column
 * @method array findByNomPieceJointeDemande(string $NOM_PIECE_JOINTE_DEMANDE) Return Demande objects filtered by the NOM_PIECE_JOINTE_DEMANDE column
 * @method array findByRevision(int $REVISION) Return Demande objects filtered by the REVISION column
 * @method array findByContenuPieceJointe(string $CONTENU_PIECE_JOINTE) Return Demande objects filtered by the CONTENU_PIECE_JOINTE column
 * @method array findByNomCitoyen(string $NOM_CITOYEN) Return Demande objects filtered by the NOM_CITOYEN column
 * @method array findByPrenomCitoyen(string $PRENOM_CITOYEN) Return Demande objects filtered by the PRENOM_CITOYEN column
 * @method array findByEmailCitoyen(string $EMAIL_CITOYEN) Return Demande objects filtered by the EMAIL_CITOYEN column
 * @method array findByTelCitoyen(string $TEL_CITOYEN) Return Demande objects filtered by the TEL_CITOYEN column
 * @method array findByTelephonePortable(string $TELEPHONE_PORTABLE) Return Demande objects filtered by the TELEPHONE_PORTABLE column
 * @method array findByAdresseCitoyen1(string $ADRESSE_CITOYEN_1) Return Demande objects filtered by the ADRESSE_CITOYEN_1 column
 * @method array findByAdresseCitoyen2(string $ADRESSE_CITOYEN_2) Return Demande objects filtered by the ADRESSE_CITOYEN_2 column
 * @method array findByCodePostalCitoyen(string $CODE_POSTAL_CITOYEN) Return Demande objects filtered by the CODE_POSTAL_CITOYEN column
 * @method array findByLocaliteCitoyen(string $LOCALITE_CITOYEN) Return Demande objects filtered by the LOCALITE_CITOYEN column
 * @method array findByIdentifiantAppMobileCitoyen(string $IDENTIFIANT_APP_MOBILE_CITOYEN) Return Demande objects filtered by the IDENTIFIANT_APP_MOBILE_CITOYEN column
 * @method array findByTypeDevice(string $TYPE_DEVICE) Return Demande objects filtered by the TYPE_DEVICE column
 * @method array findByDateDepotDemande(string $DATE_DEPOT_DEMANDE) Return Demande objects filtered by the DATE_DEPOT_DEMANDE column
 * @method array findByDateTraitementDemande(string $DATE_TRAITEMENT_DEMANDE) Return Demande objects filtered by the DATE_TRAITEMENT_DEMANDE column
 * @method array findByDateClotureDemande(string $DATE_CLOTURE_DEMANDE) Return Demande objects filtered by the DATE_CLOTURE_DEMANDE column
 * @method array findByDateReouvertureDemande(string $DATE_REOUVERTURE_DEMANDE) Return Demande objects filtered by the DATE_REOUVERTURE_DEMANDE column
 * @method array findByDureeAvantTraitement(string $DUREE_AVANT_TRAITEMENT) Return Demande objects filtered by the DUREE_AVANT_TRAITEMENT column
 * @method array findByDureeTraitement(string $DUREE_TRAITEMENT) Return Demande objects filtered by the DUREE_TRAITEMENT column
 * @method array findByMotifReouvertir(string $MOTIF_REOUVERTIR) Return Demande objects filtered by the MOTIF_REOUVERTIR column
 * @method array findByCloturerPar(string $CLOTURER_PAR) Return Demande objects filtered by the CLOTURER_PAR column
 * @method array findByPays(string $PAYS) Return Demande objects filtered by the PAYS column
 * @method array findByNomAgentFr(string $NOM_AGENT_FR) Return Demande objects filtered by the NOM_AGENT_FR column
 * @method array findByNomAgentAr(string $NOM_AGENT_AR) Return Demande objects filtered by the NOM_AGENT_AR column
 * @method array findByIdThemeCitoyen(int $ID_THEME_CITOYEN) Return Demande objects filtered by the ID_THEME_CITOYEN column
 * @method array findByIdThemeEnCours(int $ID_THEME_EN_COURS) Return Demande objects filtered by the ID_THEME_EN_COURS column
 * @method array findByDateReponse(string $DATE_REPONSE) Return Demande objects filtered by the DATE_REPONSE column
 * @method array findByDateStatut(string $DATE_STATUT) Return Demande objects filtered by the DATE_STATUT column
 * @method array findByIdRegionAffectation(int $ID_REGION_AFFECTATION) Return Demande objects filtered by the ID_REGION_AFFECTATION column
 * @method array findByIdProvinceAffectation(int $ID_PROVINCE_AFFECTATION) Return Demande objects filtered by the ID_PROVINCE_AFFECTATION column
 * @method array findByIdCommuneAffectation(int $ID_COMMUNE_AFFECTATION) Return Demande objects filtered by the ID_COMMUNE_AFFECTATION column
 * @method array findByOrganisation(string $ORGANISATION) Return Demande objects filtered by the ORGANISATION column
 * @method array findByIdOrigine(int $ID_ORIGINE) Return Demande objects filtered by the ID_ORIGINE column
 * @method array findByIdAgentCreateur(int $ID_AGENT_CREATEUR) Return Demande objects filtered by the ID_AGENT_CREATEUR column
 * @method array findByIdEntiteCreatrice(int $ID_ENTITE_CREATRICE) Return Demande objects filtered by the ID_ENTITE_CREATRICE column
 * @method array findBySupprime(string $SUPPRIME) Return Demande objects filtered by the SUPPRIME column
 * @method array findBySource(int $SOURCE) Return Demande objects filtered by the SOURCE column
 * @method array findByDetailSource(string $DETAIL_SOURCE) Return Demande objects filtered by the DETAIL_SOURCE column
 * @method array findByFormat(int $FORMAT) Return Demande objects filtered by the FORMAT column
 * @method array findByReferenceInterne(string $REFERENCE_INTERNE) Return Demande objects filtered by the REFERENCE_INTERNE column
 * @method array findByIdRegion(int $ID_REGION) Return Demande objects filtered by the ID_REGION column
 * @method array findByIdProvince(int $ID_PROVINCE) Return Demande objects filtered by the ID_PROVINCE column
 * @method array findByIdPays(int $ID_PAYS) Return Demande objects filtered by the ID_PAYS column
 * @method array findByDateCreationDemande(string $DATE_CREATION_DEMANDE) Return Demande objects filtered by the DATE_CREATION_DEMANDE column
 * @method array findByIdEntiteConcernee(int $ID_ENTITE_CONCERNEE) Return Demande objects filtered by the ID_ENTITE_CONCERNEE column
 * @method array findByNomEntiteConcerneeFr(string $NOM_ENTITE_CONCERNEE_FR) Return Demande objects filtered by the NOM_ENTITE_CONCERNEE_FR column
 * @method array findByNomEntiteConcerneeAr(string $NOM_ENTITE_CONCERNEE_AR) Return Demande objects filtered by the NOM_ENTITE_CONCERNEE_AR column
 * @method array findByIdEntiteConcerneeCitoyen(int $ID_ENTITE_CONCERNEE_CITOYEN) Return Demande objects filtered by the ID_ENTITE_CONCERNEE_CITOYEN column
 * @method array findByNomEntiteConcerneeCitoyenFr(string $NOM_ENTITE_CONCERNEE_CITOYEN_FR) Return Demande objects filtered by the NOM_ENTITE_CONCERNEE_CITOYEN_FR column
 * @method array findByNomEntiteConcerneeCitoyenAr(string $NOM_ENTITE_CONCERNEE_CITOYEN_AR) Return Demande objects filtered by the NOM_ENTITE_CONCERNEE_CITOYEN_AR column
 * @method array findByTypeRequerant(int $TYPE_REQUERANT) Return Demande objects filtered by the TYPE_REQUERANT column
 * @method array findByCanalDepot(string $CANAL_DEPOT) Return Demande objects filtered by the CANAL_DEPOT column
 * @method array findByIdExterne(int $ID_EXTERNE) Return Demande objects filtered by the ID_EXTERNE column
 * @method array findByDateEnvoiReponse(string $DATE_ENVOI_REPONSE) Return Demande objects filtered by the DATE_ENVOI_REPONSE column
 * @method array findByEtatEnvoiReponse(string $ETAT_ENVOI_REPONSE) Return Demande objects filtered by the ETAT_ENVOI_REPONSE column
 * @method array findByEtatEnvoi(string $ETAT_ENVOI) Return Demande objects filtered by the ETAT_ENVOI column
 * @method array findByDateEnvoi(string $DATE_ENVOI) Return Demande objects filtered by the DATE_ENVOI column
 * @method array findByNumeroExterne(string $NUMERO_EXTERNE) Return Demande objects filtered by the NUMERO_EXTERNE column
 * @method array findByObjetDemande(string $OBJET_DEMANDE) Return Demande objects filtered by the OBJET_DEMANDE column
 * @method array findByTagInterface(string $TAG_INTERFACE) Return Demande objects filtered by the TAG_INTERFACE column
 * @method array findByChampSupp1(string $CHAMP_SUPP_1) Return Demande objects filtered by the CHAMP_SUPP_1 column
 * @method array findByChampSupp2(string $CHAMP_SUPP_2) Return Demande objects filtered by the CHAMP_SUPP_2 column
 * @method array findByChampSupp3(string $CHAMP_SUPP_3) Return Demande objects filtered by the CHAMP_SUPP_3 column
 * @method array findByChampSupp4(string $CHAMP_SUPP_4) Return Demande objects filtered by the CHAMP_SUPP_4 column
 * @method array findByChampSupp5(string $CHAMP_SUPP_5) Return Demande objects filtered by the CHAMP_SUPP_5 column
 * @method array findByTypeDemande(int $TYPE_DEMANDE) Return Demande objects filtered by the TYPE_DEMANDE column
 * @method array findByIdAgentDestinataire(int $ID_AGENT_DESTINATAIRE) Return Demande objects filtered by the ID_AGENT_DESTINATAIRE column
 * @method array findByNomAgentDestinataireFr(string $NOM_AGENT_DESTINATAIRE_FR) Return Demande objects filtered by the NOM_AGENT_DESTINATAIRE_FR column
 * @method array findByPrenomAgentDestinataireFr(string $PRENOM_AGENT_DESTINATAIRE_FR) Return Demande objects filtered by the PRENOM_AGENT_DESTINATAIRE_FR column
 * @method array findByNomAgentDestinataireAr(string $NOM_AGENT_DESTINATAIRE_AR) Return Demande objects filtered by the NOM_AGENT_DESTINATAIRE_AR column
 * @method array findByPrenomAgentDestinataireAr(string $PRENOM_AGENT_DESTINATAIRE_AR) Return Demande objects filtered by the PRENOM_AGENT_DESTINATAIRE_AR column
 * @method array findByIdAgentSignataire(int $ID_AGENT_SIGNATAIRE) Return Demande objects filtered by the ID_AGENT_SIGNATAIRE column
 * @method array findByNomAgentSignataireFr(string $NOM_AGENT_SIGNATAIRE_FR) Return Demande objects filtered by the NOM_AGENT_SIGNATAIRE_FR column
 * @method array findByNomAgentSignataireAr(string $NOM_AGENT_SIGNATAIRE_AR) Return Demande objects filtered by the NOM_AGENT_SIGNATAIRE_AR column
 * @method array findByPrenomAgentSignataireAr(string $PRENOM_AGENT_SIGNATAIRE_AR) Return Demande objects filtered by the PRENOM_AGENT_SIGNATAIRE_AR column
 * @method array findByPrenomAgentSignataireFr(string $PRENOM_AGENT_SIGNATAIRE_FR) Return Demande objects filtered by the PRENOM_AGENT_SIGNATAIRE_FR column
 * @method array findByIdAgentEmetteur(int $ID_AGENT_EMETTEUR) Return Demande objects filtered by the ID_AGENT_EMETTEUR column
 * @method array findByNomAgentEmetteurFr(string $NOM_AGENT_EMETTEUR_FR) Return Demande objects filtered by the NOM_AGENT_EMETTEUR_FR column
 * @method array findByNomAgentEmetteurAr(string $NOM_AGENT_EMETTEUR_AR) Return Demande objects filtered by the NOM_AGENT_EMETTEUR_AR column
 * @method array findByPrenomAgentEmetteurAr(string $PRENOM_AGENT_EMETTEUR_AR) Return Demande objects filtered by the PRENOM_AGENT_EMETTEUR_AR column
 * @method array findByPrenomAgentEmetteurFr(string $PRENOM_AGENT_EMETTEUR_FR) Return Demande objects filtered by the PRENOM_AGENT_EMETTEUR_FR column
 * @method array findByReponseObligatoire(string $REPONSE_OBLIGATOIRE) Return Demande objects filtered by the REPONSE_OBLIGATOIRE column
 * @method array findByCodeDemande(int $CODE_DEMANDE) Return Demande objects filtered by the CODE_DEMANDE column
 * @method array findByCodeProvisoire(int $CODE_PROVISOIRE) Return Demande objects filtered by the CODE_PROVISOIRE column
 * @method array findByTagGateway(string $TAG_GATEWAY) Return Demande objects filtered by the TAG_GATEWAY column
 * @method array findByIdUtilisateurGateway(string $ID_UTILISATEUR_GATEWAY) Return Demande objects filtered by the ID_UTILISATEUR_GATEWAY column
 * @method array findByChampSuppTheme1(string $CHAMP_SUPP_THEME_1) Return Demande objects filtered by the CHAMP_SUPP_THEME_1 column
 * @method array findByChampSuppTheme2(string $CHAMP_SUPP_THEME_2) Return Demande objects filtered by the CHAMP_SUPP_THEME_2 column
 * @method array findByChampSuppTheme3(string $CHAMP_SUPP_THEME_3) Return Demande objects filtered by the CHAMP_SUPP_THEME_3 column
 * @method array findByChampSuppTheme4(string $CHAMP_SUPP_THEME_4) Return Demande objects filtered by the CHAMP_SUPP_THEME_4 column
 * @method array findByChampSuppTheme5(string $CHAMP_SUPP_THEME_5) Return Demande objects filtered by the CHAMP_SUPP_THEME_5 column
 * @method array findByIdTypeTheme(int $ID_TYPE_THEME) Return Demande objects filtered by the ID_TYPE_THEME column
 * @method array findByIdEtapeEnCours(int $ID_ETAPE_EN_COURS) Return Demande objects filtered by the ID_ETAPE_EN_COURS column
 * @method array findByNumeroEtapeEncours(int $NUMERO_ETAPE_ENCOURS) Return Demande objects filtered by the NUMERO_ETAPE_ENCOURS column
 * @method array findByNombreEtapes(int $NOMBRE_ETAPES) Return Demande objects filtered by the NOMBRE_ETAPES column
 * @method array findByDernierMessage(string $DERNIER_MESSAGE) Return Demande objects filtered by the DERNIER_MESSAGE column
 * @method array findByLibelleEtapeEncours(string $LIBELLE_ETAPE_ENCOURS) Return Demande objects filtered by the LIBELLE_ETAPE_ENCOURS column
 * @method array findByDernierActeur(string $DERNIER_ACTEUR) Return Demande objects filtered by the DERNIER_ACTEUR column
 * @method array findByDateReponseEtape(string $DATE_REPONSE_ETAPE) Return Demande objects filtered by the DATE_REPONSE_ETAPE column
 * @method array findByIdEntiteRelance(int $ID_ENTITE_RELANCE) Return Demande objects filtered by the ID_ENTITE_RELANCE column
 * @method array findByIdAgentRelance(int $ID_AGENT_RELANCE) Return Demande objects filtered by the ID_AGENT_RELANCE column
 * @method array findByImportant(string $IMPORTANT) Return Demande objects filtered by the IMPORTANT column
 * @method array findByDateEcheanceReponseProche(string $DATE_ECHEANCE_REPONSE_PROCHE) Return Demande objects filtered by the DATE_ECHEANCE_REPONSE_PROCHE column
 * @method array findByUrlExterne(string $URL_EXTERNE) Return Demande objects filtered by the URL_EXTERNE column
 * @method array findByClotureAutomatique(string $CLOTURE_AUTOMATIQUE) Return Demande objects filtered by the CLOTURE_AUTOMATIQUE column
 * @method array findByDelaiTraitementOuvrable(int $DELAI_TRAITEMENT_OUVRABLE) Return Demande objects filtered by the DELAI_TRAITEMENT_OUVRABLE column
 * @method array findByActeurExterne(string $ACTEUR_EXTERNE) Return Demande objects filtered by the ACTEUR_EXTERNE column
 * @method array findByDelaiTraitement(int $DELAI_TRAITEMENT) Return Demande objects filtered by the DELAI_TRAITEMENT column
 * @method array findByObjetModifie(string $OBJET_MODIFIE) Return Demande objects filtered by the OBJET_MODIFIE column
 * @method array findByConfidentiel(string $CONFIDENTIEL) Return Demande objects filtered by the CONFIDENTIEL column
 * @method array findByDelaiComplement(int $DELAI_COMPLEMENT) Return Demande objects filtered by the DELAI_COMPLEMENT column
 * @method array findByErreursDetectes(string $ERREURS_DETECTES) Return Demande objects filtered by the ERREURS_DETECTES column
 * @method array findByIdDemandeOrigine(int $ID_DEMANDE_ORIGINE) Return Demande objects filtered by the ID_DEMANDE_ORIGINE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseDemandeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseDemandeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'Demande', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DemandeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   DemandeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return DemandeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DemandeQuery) {
            return $criteria;
        }
        $query = new DemandeQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Demande|Demande[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = DemandePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(DemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Demande A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Demande A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `ID_AGENT`, `ID_COMMUNE`, `ID_SERVICE`, `ID_ENTITE`, `ID_ORGANISME`, `NUMERO_DEMANDE`, `DETAIL_DEMANDE`, `STATUT_DEMANDE`, `LATITUDE_DEMANDE`, `LONGITUDE_DEMANDE`, `ADRESSE_DEMANDE`, `ID_PIECE_JOINTE_DEMANDE`, `NOM_PIECE_JOINTE_DEMANDE`, `REVISION`, `CONTENU_PIECE_JOINTE`, `NOM_CITOYEN`, `PRENOM_CITOYEN`, `EMAIL_CITOYEN`, `TEL_CITOYEN`, `TELEPHONE_PORTABLE`, `ADRESSE_CITOYEN_1`, `ADRESSE_CITOYEN_2`, `CODE_POSTAL_CITOYEN`, `LOCALITE_CITOYEN`, `IDENTIFIANT_APP_MOBILE_CITOYEN`, `TYPE_DEVICE`, `DATE_DEPOT_DEMANDE`, `DATE_TRAITEMENT_DEMANDE`, `DATE_CLOTURE_DEMANDE`, `DATE_REOUVERTURE_DEMANDE`, `DUREE_AVANT_TRAITEMENT`, `DUREE_TRAITEMENT`, `MOTIF_REOUVERTIR`, `CLOTURER_PAR`, `PAYS`, `NOM_AGENT_FR`, `NOM_AGENT_AR`, `ID_THEME_CITOYEN`, `ID_THEME_EN_COURS`, `DATE_REPONSE`, `DATE_STATUT`, `ID_REGION_AFFECTATION`, `ID_PROVINCE_AFFECTATION`, `ID_COMMUNE_AFFECTATION`, `ORGANISATION`, `ID_ORIGINE`, `ID_AGENT_CREATEUR`, `ID_ENTITE_CREATRICE`, `SUPPRIME`, `SOURCE`, `DETAIL_SOURCE`, `FORMAT`, `REFERENCE_INTERNE`, `ID_REGION`, `ID_PROVINCE`, `ID_PAYS`, `DATE_CREATION_DEMANDE`, `ID_ENTITE_CONCERNEE`, `NOM_ENTITE_CONCERNEE_FR`, `NOM_ENTITE_CONCERNEE_AR`, `ID_ENTITE_CONCERNEE_CITOYEN`, `NOM_ENTITE_CONCERNEE_CITOYEN_FR`, `NOM_ENTITE_CONCERNEE_CITOYEN_AR`, `TYPE_REQUERANT`, `CANAL_DEPOT`, `ID_EXTERNE`, `DATE_ENVOI_REPONSE`, `ETAT_ENVOI_REPONSE`, `ETAT_ENVOI`, `DATE_ENVOI`, `NUMERO_EXTERNE`, `OBJET_DEMANDE`, `TAG_INTERFACE`, `CHAMP_SUPP_1`, `CHAMP_SUPP_2`, `CHAMP_SUPP_3`, `CHAMP_SUPP_4`, `CHAMP_SUPP_5`, `TYPE_DEMANDE`, `ID_AGENT_DESTINATAIRE`, `NOM_AGENT_DESTINATAIRE_FR`, `PRENOM_AGENT_DESTINATAIRE_FR`, `NOM_AGENT_DESTINATAIRE_AR`, `PRENOM_AGENT_DESTINATAIRE_AR`, `ID_AGENT_SIGNATAIRE`, `NOM_AGENT_SIGNATAIRE_FR`, `NOM_AGENT_SIGNATAIRE_AR`, `PRENOM_AGENT_SIGNATAIRE_AR`, `PRENOM_AGENT_SIGNATAIRE_FR`, `ID_AGENT_EMETTEUR`, `NOM_AGENT_EMETTEUR_FR`, `NOM_AGENT_EMETTEUR_AR`, `PRENOM_AGENT_EMETTEUR_AR`, `PRENOM_AGENT_EMETTEUR_FR`, `REPONSE_OBLIGATOIRE`, `CODE_DEMANDE`, `CODE_PROVISOIRE`, `TAG_GATEWAY`, `ID_UTILISATEUR_GATEWAY`, `CHAMP_SUPP_THEME_1`, `CHAMP_SUPP_THEME_2`, `CHAMP_SUPP_THEME_3`, `CHAMP_SUPP_THEME_4`, `CHAMP_SUPP_THEME_5`, `ID_TYPE_THEME`, `ID_ETAPE_EN_COURS`, `NUMERO_ETAPE_ENCOURS`, `NOMBRE_ETAPES`, `DERNIER_MESSAGE`, `LIBELLE_ETAPE_ENCOURS`, `DERNIER_ACTEUR`, `DATE_REPONSE_ETAPE`, `ID_ENTITE_RELANCE`, `ID_AGENT_RELANCE`, `IMPORTANT`, `DATE_ECHEANCE_REPONSE_PROCHE`, `URL_EXTERNE`, `CLOTURE_AUTOMATIQUE`, `DELAI_TRAITEMENT_OUVRABLE`, `ACTEUR_EXTERNE`, `DELAI_TRAITEMENT`, `OBJET_MODIFIE`, `CONFIDENTIEL`, `DELAI_COMPLEMENT`, `ERREURS_DETECTES`, `ID_DEMANDE_ORIGINE` FROM `demande` WHERE `ID` = :p0';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Demande();
            $obj->hydrate($row);
            DemandePeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Demande|Demande[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Demande[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(DemandePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(DemandePeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE ID = 1234
     * $query->filterById(array(12, 34)); // WHERE ID IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE ID >= 12
     * $query->filterById(array('max' => 12)); // WHERE ID <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(DemandePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(DemandePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the ID_AGENT column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgent(1234); // WHERE ID_AGENT = 1234
     * $query->filterByIdAgent(array(12, 34)); // WHERE ID_AGENT IN (12, 34)
     * $query->filterByIdAgent(array('min' => 12)); // WHERE ID_AGENT >= 12
     * $query->filterByIdAgent(array('max' => 12)); // WHERE ID_AGENT <= 12
     * </code>
     *
     * @param     mixed $idAgent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(DemandePeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(DemandePeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the ID_COMMUNE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCommune(1234); // WHERE ID_COMMUNE = 1234
     * $query->filterByIdCommune(array(12, 34)); // WHERE ID_COMMUNE IN (12, 34)
     * $query->filterByIdCommune(array('min' => 12)); // WHERE ID_COMMUNE >= 12
     * $query->filterByIdCommune(array('max' => 12)); // WHERE ID_COMMUNE <= 12
     * </code>
     *
     * @param     mixed $idCommune The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByIdCommune($idCommune = null, $comparison = null)
    {
        if (is_array($idCommune)) {
            $useMinMax = false;
            if (isset($idCommune['min'])) {
                $this->addUsingAlias(DemandePeer::ID_COMMUNE, $idCommune['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCommune['max'])) {
                $this->addUsingAlias(DemandePeer::ID_COMMUNE, $idCommune['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::ID_COMMUNE, $idCommune, $comparison);
    }

    /**
     * Filter the query on the ID_SERVICE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdService(1234); // WHERE ID_SERVICE = 1234
     * $query->filterByIdService(array(12, 34)); // WHERE ID_SERVICE IN (12, 34)
     * $query->filterByIdService(array('min' => 12)); // WHERE ID_SERVICE >= 12
     * $query->filterByIdService(array('max' => 12)); // WHERE ID_SERVICE <= 12
     * </code>
     *
     * @param     mixed $idService The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByIdService($idService = null, $comparison = null)
    {
        if (is_array($idService)) {
            $useMinMax = false;
            if (isset($idService['min'])) {
                $this->addUsingAlias(DemandePeer::ID_SERVICE, $idService['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idService['max'])) {
                $this->addUsingAlias(DemandePeer::ID_SERVICE, $idService['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::ID_SERVICE, $idService, $comparison);
    }

    /**
     * Filter the query on the ID_ENTITE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntite(1234); // WHERE ID_ENTITE = 1234
     * $query->filterByIdEntite(array(12, 34)); // WHERE ID_ENTITE IN (12, 34)
     * $query->filterByIdEntite(array('min' => 12)); // WHERE ID_ENTITE >= 12
     * $query->filterByIdEntite(array('max' => 12)); // WHERE ID_ENTITE <= 12
     * </code>
     *
     * @param     mixed $idEntite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByIdEntite($idEntite = null, $comparison = null)
    {
        if (is_array($idEntite)) {
            $useMinMax = false;
            if (isset($idEntite['min'])) {
                $this->addUsingAlias(DemandePeer::ID_ENTITE, $idEntite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntite['max'])) {
                $this->addUsingAlias(DemandePeer::ID_ENTITE, $idEntite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::ID_ENTITE, $idEntite, $comparison);
    }

    /**
     * Filter the query on the ID_ORGANISME column
     *
     * Example usage:
     * <code>
     * $query->filterByIdOrganisme(1234); // WHERE ID_ORGANISME = 1234
     * $query->filterByIdOrganisme(array(12, 34)); // WHERE ID_ORGANISME IN (12, 34)
     * $query->filterByIdOrganisme(array('min' => 12)); // WHERE ID_ORGANISME >= 12
     * $query->filterByIdOrganisme(array('max' => 12)); // WHERE ID_ORGANISME <= 12
     * </code>
     *
     * @param     mixed $idOrganisme The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByIdOrganisme($idOrganisme = null, $comparison = null)
    {
        if (is_array($idOrganisme)) {
            $useMinMax = false;
            if (isset($idOrganisme['min'])) {
                $this->addUsingAlias(DemandePeer::ID_ORGANISME, $idOrganisme['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOrganisme['max'])) {
                $this->addUsingAlias(DemandePeer::ID_ORGANISME, $idOrganisme['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::ID_ORGANISME, $idOrganisme, $comparison);
    }

    /**
     * Filter the query on the NUMERO_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroDemande('fooValue');   // WHERE NUMERO_DEMANDE = 'fooValue'
     * $query->filterByNumeroDemande('%fooValue%'); // WHERE NUMERO_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByNumeroDemande($numeroDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroDemande)) {
                $numeroDemande = str_replace('*', '%', $numeroDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::NUMERO_DEMANDE, $numeroDemande, $comparison);
    }

    /**
     * Filter the query on the DETAIL_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByDetailDemande('fooValue');   // WHERE DETAIL_DEMANDE = 'fooValue'
     * $query->filterByDetailDemande('%fooValue%'); // WHERE DETAIL_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $detailDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByDetailDemande($detailDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($detailDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $detailDemande)) {
                $detailDemande = str_replace('*', '%', $detailDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::DETAIL_DEMANDE, $detailDemande, $comparison);
    }

    /**
     * Filter the query on the STATUT_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutDemande(1234); // WHERE STATUT_DEMANDE = 1234
     * $query->filterByStatutDemande(array(12, 34)); // WHERE STATUT_DEMANDE IN (12, 34)
     * $query->filterByStatutDemande(array('min' => 12)); // WHERE STATUT_DEMANDE >= 12
     * $query->filterByStatutDemande(array('max' => 12)); // WHERE STATUT_DEMANDE <= 12
     * </code>
     *
     * @param     mixed $statutDemande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByStatutDemande($statutDemande = null, $comparison = null)
    {
        if (is_array($statutDemande)) {
            $useMinMax = false;
            if (isset($statutDemande['min'])) {
                $this->addUsingAlias(DemandePeer::STATUT_DEMANDE, $statutDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statutDemande['max'])) {
                $this->addUsingAlias(DemandePeer::STATUT_DEMANDE, $statutDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::STATUT_DEMANDE, $statutDemande, $comparison);
    }

    /**
     * Filter the query on the LATITUDE_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByLatitudeDemande('fooValue');   // WHERE LATITUDE_DEMANDE = 'fooValue'
     * $query->filterByLatitudeDemande('%fooValue%'); // WHERE LATITUDE_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $latitudeDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByLatitudeDemande($latitudeDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($latitudeDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $latitudeDemande)) {
                $latitudeDemande = str_replace('*', '%', $latitudeDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::LATITUDE_DEMANDE, $latitudeDemande, $comparison);
    }

    /**
     * Filter the query on the LONGITUDE_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByLongitudeDemande('fooValue');   // WHERE LONGITUDE_DEMANDE = 'fooValue'
     * $query->filterByLongitudeDemande('%fooValue%'); // WHERE LONGITUDE_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $longitudeDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByLongitudeDemande($longitudeDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($longitudeDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $longitudeDemande)) {
                $longitudeDemande = str_replace('*', '%', $longitudeDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::LONGITUDE_DEMANDE, $longitudeDemande, $comparison);
    }

    /**
     * Filter the query on the ADRESSE_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseDemande('fooValue');   // WHERE ADRESSE_DEMANDE = 'fooValue'
     * $query->filterByAdresseDemande('%fooValue%'); // WHERE ADRESSE_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByAdresseDemande($adresseDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseDemande)) {
                $adresseDemande = str_replace('*', '%', $adresseDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::ADRESSE_DEMANDE, $adresseDemande, $comparison);
    }

    /**
     * Filter the query on the ID_PIECE_JOINTE_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPieceJointeDemande(1234); // WHERE ID_PIECE_JOINTE_DEMANDE = 1234
     * $query->filterByIdPieceJointeDemande(array(12, 34)); // WHERE ID_PIECE_JOINTE_DEMANDE IN (12, 34)
     * $query->filterByIdPieceJointeDemande(array('min' => 12)); // WHERE ID_PIECE_JOINTE_DEMANDE >= 12
     * $query->filterByIdPieceJointeDemande(array('max' => 12)); // WHERE ID_PIECE_JOINTE_DEMANDE <= 12
     * </code>
     *
     * @param     mixed $idPieceJointeDemande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByIdPieceJointeDemande($idPieceJointeDemande = null, $comparison = null)
    {
        if (is_array($idPieceJointeDemande)) {
            $useMinMax = false;
            if (isset($idPieceJointeDemande['min'])) {
                $this->addUsingAlias(DemandePeer::ID_PIECE_JOINTE_DEMANDE, $idPieceJointeDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPieceJointeDemande['max'])) {
                $this->addUsingAlias(DemandePeer::ID_PIECE_JOINTE_DEMANDE, $idPieceJointeDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::ID_PIECE_JOINTE_DEMANDE, $idPieceJointeDemande, $comparison);
    }

    /**
     * Filter the query on the NOM_PIECE_JOINTE_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByNomPieceJointeDemande('fooValue');   // WHERE NOM_PIECE_JOINTE_DEMANDE = 'fooValue'
     * $query->filterByNomPieceJointeDemande('%fooValue%'); // WHERE NOM_PIECE_JOINTE_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomPieceJointeDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByNomPieceJointeDemande($nomPieceJointeDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomPieceJointeDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomPieceJointeDemande)) {
                $nomPieceJointeDemande = str_replace('*', '%', $nomPieceJointeDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::NOM_PIECE_JOINTE_DEMANDE, $nomPieceJointeDemande, $comparison);
    }

    /**
     * Filter the query on the REVISION column
     *
     * Example usage:
     * <code>
     * $query->filterByRevision(1234); // WHERE REVISION = 1234
     * $query->filterByRevision(array(12, 34)); // WHERE REVISION IN (12, 34)
     * $query->filterByRevision(array('min' => 12)); // WHERE REVISION >= 12
     * $query->filterByRevision(array('max' => 12)); // WHERE REVISION <= 12
     * </code>
     *
     * @param     mixed $revision The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByRevision($revision = null, $comparison = null)
    {
        if (is_array($revision)) {
            $useMinMax = false;
            if (isset($revision['min'])) {
                $this->addUsingAlias(DemandePeer::REVISION, $revision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($revision['max'])) {
                $this->addUsingAlias(DemandePeer::REVISION, $revision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::REVISION, $revision, $comparison);
    }

    /**
     * Filter the query on the CONTENU_PIECE_JOINTE column
     *
     * Example usage:
     * <code>
     * $query->filterByContenuPieceJointe('fooValue');   // WHERE CONTENU_PIECE_JOINTE = 'fooValue'
     * $query->filterByContenuPieceJointe('%fooValue%'); // WHERE CONTENU_PIECE_JOINTE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contenuPieceJointe The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByContenuPieceJointe($contenuPieceJointe = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contenuPieceJointe)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contenuPieceJointe)) {
                $contenuPieceJointe = str_replace('*', '%', $contenuPieceJointe);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::CONTENU_PIECE_JOINTE, $contenuPieceJointe, $comparison);
    }

    /**
     * Filter the query on the NOM_CITOYEN column
     *
     * Example usage:
     * <code>
     * $query->filterByNomCitoyen('fooValue');   // WHERE NOM_CITOYEN = 'fooValue'
     * $query->filterByNomCitoyen('%fooValue%'); // WHERE NOM_CITOYEN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomCitoyen The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByNomCitoyen($nomCitoyen = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomCitoyen)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomCitoyen)) {
                $nomCitoyen = str_replace('*', '%', $nomCitoyen);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::NOM_CITOYEN, $nomCitoyen, $comparison);
    }

    /**
     * Filter the query on the PRENOM_CITOYEN column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenomCitoyen('fooValue');   // WHERE PRENOM_CITOYEN = 'fooValue'
     * $query->filterByPrenomCitoyen('%fooValue%'); // WHERE PRENOM_CITOYEN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenomCitoyen The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByPrenomCitoyen($prenomCitoyen = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenomCitoyen)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenomCitoyen)) {
                $prenomCitoyen = str_replace('*', '%', $prenomCitoyen);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::PRENOM_CITOYEN, $prenomCitoyen, $comparison);
    }

    /**
     * Filter the query on the EMAIL_CITOYEN column
     *
     * Example usage:
     * <code>
     * $query->filterByEmailCitoyen('fooValue');   // WHERE EMAIL_CITOYEN = 'fooValue'
     * $query->filterByEmailCitoyen('%fooValue%'); // WHERE EMAIL_CITOYEN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $emailCitoyen The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByEmailCitoyen($emailCitoyen = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($emailCitoyen)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $emailCitoyen)) {
                $emailCitoyen = str_replace('*', '%', $emailCitoyen);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::EMAIL_CITOYEN, $emailCitoyen, $comparison);
    }

    /**
     * Filter the query on the TEL_CITOYEN column
     *
     * Example usage:
     * <code>
     * $query->filterByTelCitoyen('fooValue');   // WHERE TEL_CITOYEN = 'fooValue'
     * $query->filterByTelCitoyen('%fooValue%'); // WHERE TEL_CITOYEN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telCitoyen The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByTelCitoyen($telCitoyen = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telCitoyen)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telCitoyen)) {
                $telCitoyen = str_replace('*', '%', $telCitoyen);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::TEL_CITOYEN, $telCitoyen, $comparison);
    }

    /**
     * Filter the query on the TELEPHONE_PORTABLE column
     *
     * Example usage:
     * <code>
     * $query->filterByTelephonePortable('fooValue');   // WHERE TELEPHONE_PORTABLE = 'fooValue'
     * $query->filterByTelephonePortable('%fooValue%'); // WHERE TELEPHONE_PORTABLE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telephonePortable The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByTelephonePortable($telephonePortable = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telephonePortable)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telephonePortable)) {
                $telephonePortable = str_replace('*', '%', $telephonePortable);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::TELEPHONE_PORTABLE, $telephonePortable, $comparison);
    }

    /**
     * Filter the query on the ADRESSE_CITOYEN_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseCitoyen1('fooValue');   // WHERE ADRESSE_CITOYEN_1 = 'fooValue'
     * $query->filterByAdresseCitoyen1('%fooValue%'); // WHERE ADRESSE_CITOYEN_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseCitoyen1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByAdresseCitoyen1($adresseCitoyen1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseCitoyen1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseCitoyen1)) {
                $adresseCitoyen1 = str_replace('*', '%', $adresseCitoyen1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::ADRESSE_CITOYEN_1, $adresseCitoyen1, $comparison);
    }

    /**
     * Filter the query on the ADRESSE_CITOYEN_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseCitoyen2('fooValue');   // WHERE ADRESSE_CITOYEN_2 = 'fooValue'
     * $query->filterByAdresseCitoyen2('%fooValue%'); // WHERE ADRESSE_CITOYEN_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseCitoyen2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByAdresseCitoyen2($adresseCitoyen2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseCitoyen2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseCitoyen2)) {
                $adresseCitoyen2 = str_replace('*', '%', $adresseCitoyen2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::ADRESSE_CITOYEN_2, $adresseCitoyen2, $comparison);
    }

    /**
     * Filter the query on the CODE_POSTAL_CITOYEN column
     *
     * Example usage:
     * <code>
     * $query->filterByCodePostalCitoyen('fooValue');   // WHERE CODE_POSTAL_CITOYEN = 'fooValue'
     * $query->filterByCodePostalCitoyen('%fooValue%'); // WHERE CODE_POSTAL_CITOYEN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codePostalCitoyen The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByCodePostalCitoyen($codePostalCitoyen = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codePostalCitoyen)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codePostalCitoyen)) {
                $codePostalCitoyen = str_replace('*', '%', $codePostalCitoyen);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::CODE_POSTAL_CITOYEN, $codePostalCitoyen, $comparison);
    }

    /**
     * Filter the query on the LOCALITE_CITOYEN column
     *
     * Example usage:
     * <code>
     * $query->filterByLocaliteCitoyen('fooValue');   // WHERE LOCALITE_CITOYEN = 'fooValue'
     * $query->filterByLocaliteCitoyen('%fooValue%'); // WHERE LOCALITE_CITOYEN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $localiteCitoyen The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByLocaliteCitoyen($localiteCitoyen = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($localiteCitoyen)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $localiteCitoyen)) {
                $localiteCitoyen = str_replace('*', '%', $localiteCitoyen);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::LOCALITE_CITOYEN, $localiteCitoyen, $comparison);
    }

    /**
     * Filter the query on the IDENTIFIANT_APP_MOBILE_CITOYEN column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentifiantAppMobileCitoyen('fooValue');   // WHERE IDENTIFIANT_APP_MOBILE_CITOYEN = 'fooValue'
     * $query->filterByIdentifiantAppMobileCitoyen('%fooValue%'); // WHERE IDENTIFIANT_APP_MOBILE_CITOYEN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $identifiantAppMobileCitoyen The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByIdentifiantAppMobileCitoyen($identifiantAppMobileCitoyen = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($identifiantAppMobileCitoyen)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $identifiantAppMobileCitoyen)) {
                $identifiantAppMobileCitoyen = str_replace('*', '%', $identifiantAppMobileCitoyen);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::IDENTIFIANT_APP_MOBILE_CITOYEN, $identifiantAppMobileCitoyen, $comparison);
    }

    /**
     * Filter the query on the TYPE_DEVICE column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeDevice('fooValue');   // WHERE TYPE_DEVICE = 'fooValue'
     * $query->filterByTypeDevice('%fooValue%'); // WHERE TYPE_DEVICE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeDevice The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByTypeDevice($typeDevice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeDevice)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeDevice)) {
                $typeDevice = str_replace('*', '%', $typeDevice);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::TYPE_DEVICE, $typeDevice, $comparison);
    }

    /**
     * Filter the query on the DATE_DEPOT_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDepotDemande('2011-03-14'); // WHERE DATE_DEPOT_DEMANDE = '2011-03-14'
     * $query->filterByDateDepotDemande('now'); // WHERE DATE_DEPOT_DEMANDE = '2011-03-14'
     * $query->filterByDateDepotDemande(array('max' => 'yesterday')); // WHERE DATE_DEPOT_DEMANDE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateDepotDemande The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByDateDepotDemande($dateDepotDemande = null, $comparison = null)
    {
        if (is_array($dateDepotDemande)) {
            $useMinMax = false;
            if (isset($dateDepotDemande['min'])) {
                $this->addUsingAlias(DemandePeer::DATE_DEPOT_DEMANDE, $dateDepotDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDepotDemande['max'])) {
                $this->addUsingAlias(DemandePeer::DATE_DEPOT_DEMANDE, $dateDepotDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::DATE_DEPOT_DEMANDE, $dateDepotDemande, $comparison);
    }

    /**
     * Filter the query on the DATE_TRAITEMENT_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByDateTraitementDemande('2011-03-14'); // WHERE DATE_TRAITEMENT_DEMANDE = '2011-03-14'
     * $query->filterByDateTraitementDemande('now'); // WHERE DATE_TRAITEMENT_DEMANDE = '2011-03-14'
     * $query->filterByDateTraitementDemande(array('max' => 'yesterday')); // WHERE DATE_TRAITEMENT_DEMANDE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateTraitementDemande The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByDateTraitementDemande($dateTraitementDemande = null, $comparison = null)
    {
        if (is_array($dateTraitementDemande)) {
            $useMinMax = false;
            if (isset($dateTraitementDemande['min'])) {
                $this->addUsingAlias(DemandePeer::DATE_TRAITEMENT_DEMANDE, $dateTraitementDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateTraitementDemande['max'])) {
                $this->addUsingAlias(DemandePeer::DATE_TRAITEMENT_DEMANDE, $dateTraitementDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::DATE_TRAITEMENT_DEMANDE, $dateTraitementDemande, $comparison);
    }

    /**
     * Filter the query on the DATE_CLOTURE_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByDateClotureDemande('2011-03-14'); // WHERE DATE_CLOTURE_DEMANDE = '2011-03-14'
     * $query->filterByDateClotureDemande('now'); // WHERE DATE_CLOTURE_DEMANDE = '2011-03-14'
     * $query->filterByDateClotureDemande(array('max' => 'yesterday')); // WHERE DATE_CLOTURE_DEMANDE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateClotureDemande The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByDateClotureDemande($dateClotureDemande = null, $comparison = null)
    {
        if (is_array($dateClotureDemande)) {
            $useMinMax = false;
            if (isset($dateClotureDemande['min'])) {
                $this->addUsingAlias(DemandePeer::DATE_CLOTURE_DEMANDE, $dateClotureDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateClotureDemande['max'])) {
                $this->addUsingAlias(DemandePeer::DATE_CLOTURE_DEMANDE, $dateClotureDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::DATE_CLOTURE_DEMANDE, $dateClotureDemande, $comparison);
    }

    /**
     * Filter the query on the DATE_REOUVERTURE_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByDateReouvertureDemande('2011-03-14'); // WHERE DATE_REOUVERTURE_DEMANDE = '2011-03-14'
     * $query->filterByDateReouvertureDemande('now'); // WHERE DATE_REOUVERTURE_DEMANDE = '2011-03-14'
     * $query->filterByDateReouvertureDemande(array('max' => 'yesterday')); // WHERE DATE_REOUVERTURE_DEMANDE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateReouvertureDemande The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByDateReouvertureDemande($dateReouvertureDemande = null, $comparison = null)
    {
        if (is_array($dateReouvertureDemande)) {
            $useMinMax = false;
            if (isset($dateReouvertureDemande['min'])) {
                $this->addUsingAlias(DemandePeer::DATE_REOUVERTURE_DEMANDE, $dateReouvertureDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateReouvertureDemande['max'])) {
                $this->addUsingAlias(DemandePeer::DATE_REOUVERTURE_DEMANDE, $dateReouvertureDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::DATE_REOUVERTURE_DEMANDE, $dateReouvertureDemande, $comparison);
    }

    /**
     * Filter the query on the DUREE_AVANT_TRAITEMENT column
     *
     * Example usage:
     * <code>
     * $query->filterByDureeAvantTraitement(1234); // WHERE DUREE_AVANT_TRAITEMENT = 1234
     * $query->filterByDureeAvantTraitement(array(12, 34)); // WHERE DUREE_AVANT_TRAITEMENT IN (12, 34)
     * $query->filterByDureeAvantTraitement(array('min' => 12)); // WHERE DUREE_AVANT_TRAITEMENT >= 12
     * $query->filterByDureeAvantTraitement(array('max' => 12)); // WHERE DUREE_AVANT_TRAITEMENT <= 12
     * </code>
     *
     * @param     mixed $dureeAvantTraitement The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByDureeAvantTraitement($dureeAvantTraitement = null, $comparison = null)
    {
        if (is_array($dureeAvantTraitement)) {
            $useMinMax = false;
            if (isset($dureeAvantTraitement['min'])) {
                $this->addUsingAlias(DemandePeer::DUREE_AVANT_TRAITEMENT, $dureeAvantTraitement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dureeAvantTraitement['max'])) {
                $this->addUsingAlias(DemandePeer::DUREE_AVANT_TRAITEMENT, $dureeAvantTraitement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::DUREE_AVANT_TRAITEMENT, $dureeAvantTraitement, $comparison);
    }

    /**
     * Filter the query on the DUREE_TRAITEMENT column
     *
     * Example usage:
     * <code>
     * $query->filterByDureeTraitement(1234); // WHERE DUREE_TRAITEMENT = 1234
     * $query->filterByDureeTraitement(array(12, 34)); // WHERE DUREE_TRAITEMENT IN (12, 34)
     * $query->filterByDureeTraitement(array('min' => 12)); // WHERE DUREE_TRAITEMENT >= 12
     * $query->filterByDureeTraitement(array('max' => 12)); // WHERE DUREE_TRAITEMENT <= 12
     * </code>
     *
     * @param     mixed $dureeTraitement The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByDureeTraitement($dureeTraitement = null, $comparison = null)
    {
        if (is_array($dureeTraitement)) {
            $useMinMax = false;
            if (isset($dureeTraitement['min'])) {
                $this->addUsingAlias(DemandePeer::DUREE_TRAITEMENT, $dureeTraitement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dureeTraitement['max'])) {
                $this->addUsingAlias(DemandePeer::DUREE_TRAITEMENT, $dureeTraitement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::DUREE_TRAITEMENT, $dureeTraitement, $comparison);
    }

    /**
     * Filter the query on the MOTIF_REOUVERTIR column
     *
     * Example usage:
     * <code>
     * $query->filterByMotifReouvertir('fooValue');   // WHERE MOTIF_REOUVERTIR = 'fooValue'
     * $query->filterByMotifReouvertir('%fooValue%'); // WHERE MOTIF_REOUVERTIR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $motifReouvertir The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByMotifReouvertir($motifReouvertir = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($motifReouvertir)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $motifReouvertir)) {
                $motifReouvertir = str_replace('*', '%', $motifReouvertir);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::MOTIF_REOUVERTIR, $motifReouvertir, $comparison);
    }

    /**
     * Filter the query on the CLOTURER_PAR column
     *
     * Example usage:
     * <code>
     * $query->filterByCloturerPar('fooValue');   // WHERE CLOTURER_PAR = 'fooValue'
     * $query->filterByCloturerPar('%fooValue%'); // WHERE CLOTURER_PAR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cloturerPar The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByCloturerPar($cloturerPar = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cloturerPar)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cloturerPar)) {
                $cloturerPar = str_replace('*', '%', $cloturerPar);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::CLOTURER_PAR, $cloturerPar, $comparison);
    }

    /**
     * Filter the query on the PAYS column
     *
     * Example usage:
     * <code>
     * $query->filterByPays('fooValue');   // WHERE PAYS = 'fooValue'
     * $query->filterByPays('%fooValue%'); // WHERE PAYS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pays The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByPays($pays = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pays)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pays)) {
                $pays = str_replace('*', '%', $pays);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::PAYS, $pays, $comparison);
    }

    /**
     * Filter the query on the NOM_AGENT_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomAgentFr('fooValue');   // WHERE NOM_AGENT_FR = 'fooValue'
     * $query->filterByNomAgentFr('%fooValue%'); // WHERE NOM_AGENT_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomAgentFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByNomAgentFr($nomAgentFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomAgentFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomAgentFr)) {
                $nomAgentFr = str_replace('*', '%', $nomAgentFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::NOM_AGENT_FR, $nomAgentFr, $comparison);
    }

    /**
     * Filter the query on the NOM_AGENT_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomAgentAr('fooValue');   // WHERE NOM_AGENT_AR = 'fooValue'
     * $query->filterByNomAgentAr('%fooValue%'); // WHERE NOM_AGENT_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomAgentAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByNomAgentAr($nomAgentAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomAgentAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomAgentAr)) {
                $nomAgentAr = str_replace('*', '%', $nomAgentAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::NOM_AGENT_AR, $nomAgentAr, $comparison);
    }

    /**
     * Filter the query on the ID_THEME_CITOYEN column
     *
     * Example usage:
     * <code>
     * $query->filterByIdThemeCitoyen(1234); // WHERE ID_THEME_CITOYEN = 1234
     * $query->filterByIdThemeCitoyen(array(12, 34)); // WHERE ID_THEME_CITOYEN IN (12, 34)
     * $query->filterByIdThemeCitoyen(array('min' => 12)); // WHERE ID_THEME_CITOYEN >= 12
     * $query->filterByIdThemeCitoyen(array('max' => 12)); // WHERE ID_THEME_CITOYEN <= 12
     * </code>
     *
     * @param     mixed $idThemeCitoyen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByIdThemeCitoyen($idThemeCitoyen = null, $comparison = null)
    {
        if (is_array($idThemeCitoyen)) {
            $useMinMax = false;
            if (isset($idThemeCitoyen['min'])) {
                $this->addUsingAlias(DemandePeer::ID_THEME_CITOYEN, $idThemeCitoyen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idThemeCitoyen['max'])) {
                $this->addUsingAlias(DemandePeer::ID_THEME_CITOYEN, $idThemeCitoyen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::ID_THEME_CITOYEN, $idThemeCitoyen, $comparison);
    }

    /**
     * Filter the query on the ID_THEME_EN_COURS column
     *
     * Example usage:
     * <code>
     * $query->filterByIdThemeEnCours(1234); // WHERE ID_THEME_EN_COURS = 1234
     * $query->filterByIdThemeEnCours(array(12, 34)); // WHERE ID_THEME_EN_COURS IN (12, 34)
     * $query->filterByIdThemeEnCours(array('min' => 12)); // WHERE ID_THEME_EN_COURS >= 12
     * $query->filterByIdThemeEnCours(array('max' => 12)); // WHERE ID_THEME_EN_COURS <= 12
     * </code>
     *
     * @param     mixed $idThemeEnCours The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByIdThemeEnCours($idThemeEnCours = null, $comparison = null)
    {
        if (is_array($idThemeEnCours)) {
            $useMinMax = false;
            if (isset($idThemeEnCours['min'])) {
                $this->addUsingAlias(DemandePeer::ID_THEME_EN_COURS, $idThemeEnCours['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idThemeEnCours['max'])) {
                $this->addUsingAlias(DemandePeer::ID_THEME_EN_COURS, $idThemeEnCours['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::ID_THEME_EN_COURS, $idThemeEnCours, $comparison);
    }

    /**
     * Filter the query on the DATE_REPONSE column
     *
     * Example usage:
     * <code>
     * $query->filterByDateReponse('2011-03-14'); // WHERE DATE_REPONSE = '2011-03-14'
     * $query->filterByDateReponse('now'); // WHERE DATE_REPONSE = '2011-03-14'
     * $query->filterByDateReponse(array('max' => 'yesterday')); // WHERE DATE_REPONSE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateReponse The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByDateReponse($dateReponse = null, $comparison = null)
    {
        if (is_array($dateReponse)) {
            $useMinMax = false;
            if (isset($dateReponse['min'])) {
                $this->addUsingAlias(DemandePeer::DATE_REPONSE, $dateReponse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateReponse['max'])) {
                $this->addUsingAlias(DemandePeer::DATE_REPONSE, $dateReponse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::DATE_REPONSE, $dateReponse, $comparison);
    }

    /**
     * Filter the query on the DATE_STATUT column
     *
     * Example usage:
     * <code>
     * $query->filterByDateStatut('2011-03-14'); // WHERE DATE_STATUT = '2011-03-14'
     * $query->filterByDateStatut('now'); // WHERE DATE_STATUT = '2011-03-14'
     * $query->filterByDateStatut(array('max' => 'yesterday')); // WHERE DATE_STATUT > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateStatut The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByDateStatut($dateStatut = null, $comparison = null)
    {
        if (is_array($dateStatut)) {
            $useMinMax = false;
            if (isset($dateStatut['min'])) {
                $this->addUsingAlias(DemandePeer::DATE_STATUT, $dateStatut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateStatut['max'])) {
                $this->addUsingAlias(DemandePeer::DATE_STATUT, $dateStatut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::DATE_STATUT, $dateStatut, $comparison);
    }

    /**
     * Filter the query on the ID_REGION_AFFECTATION column
     *
     * Example usage:
     * <code>
     * $query->filterByIdRegionAffectation(1234); // WHERE ID_REGION_AFFECTATION = 1234
     * $query->filterByIdRegionAffectation(array(12, 34)); // WHERE ID_REGION_AFFECTATION IN (12, 34)
     * $query->filterByIdRegionAffectation(array('min' => 12)); // WHERE ID_REGION_AFFECTATION >= 12
     * $query->filterByIdRegionAffectation(array('max' => 12)); // WHERE ID_REGION_AFFECTATION <= 12
     * </code>
     *
     * @param     mixed $idRegionAffectation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByIdRegionAffectation($idRegionAffectation = null, $comparison = null)
    {
        if (is_array($idRegionAffectation)) {
            $useMinMax = false;
            if (isset($idRegionAffectation['min'])) {
                $this->addUsingAlias(DemandePeer::ID_REGION_AFFECTATION, $idRegionAffectation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idRegionAffectation['max'])) {
                $this->addUsingAlias(DemandePeer::ID_REGION_AFFECTATION, $idRegionAffectation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::ID_REGION_AFFECTATION, $idRegionAffectation, $comparison);
    }

    /**
     * Filter the query on the ID_PROVINCE_AFFECTATION column
     *
     * Example usage:
     * <code>
     * $query->filterByIdProvinceAffectation(1234); // WHERE ID_PROVINCE_AFFECTATION = 1234
     * $query->filterByIdProvinceAffectation(array(12, 34)); // WHERE ID_PROVINCE_AFFECTATION IN (12, 34)
     * $query->filterByIdProvinceAffectation(array('min' => 12)); // WHERE ID_PROVINCE_AFFECTATION >= 12
     * $query->filterByIdProvinceAffectation(array('max' => 12)); // WHERE ID_PROVINCE_AFFECTATION <= 12
     * </code>
     *
     * @param     mixed $idProvinceAffectation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByIdProvinceAffectation($idProvinceAffectation = null, $comparison = null)
    {
        if (is_array($idProvinceAffectation)) {
            $useMinMax = false;
            if (isset($idProvinceAffectation['min'])) {
                $this->addUsingAlias(DemandePeer::ID_PROVINCE_AFFECTATION, $idProvinceAffectation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProvinceAffectation['max'])) {
                $this->addUsingAlias(DemandePeer::ID_PROVINCE_AFFECTATION, $idProvinceAffectation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::ID_PROVINCE_AFFECTATION, $idProvinceAffectation, $comparison);
    }

    /**
     * Filter the query on the ID_COMMUNE_AFFECTATION column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCommuneAffectation(1234); // WHERE ID_COMMUNE_AFFECTATION = 1234
     * $query->filterByIdCommuneAffectation(array(12, 34)); // WHERE ID_COMMUNE_AFFECTATION IN (12, 34)
     * $query->filterByIdCommuneAffectation(array('min' => 12)); // WHERE ID_COMMUNE_AFFECTATION >= 12
     * $query->filterByIdCommuneAffectation(array('max' => 12)); // WHERE ID_COMMUNE_AFFECTATION <= 12
     * </code>
     *
     * @param     mixed $idCommuneAffectation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByIdCommuneAffectation($idCommuneAffectation = null, $comparison = null)
    {
        if (is_array($idCommuneAffectation)) {
            $useMinMax = false;
            if (isset($idCommuneAffectation['min'])) {
                $this->addUsingAlias(DemandePeer::ID_COMMUNE_AFFECTATION, $idCommuneAffectation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCommuneAffectation['max'])) {
                $this->addUsingAlias(DemandePeer::ID_COMMUNE_AFFECTATION, $idCommuneAffectation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::ID_COMMUNE_AFFECTATION, $idCommuneAffectation, $comparison);
    }

    /**
     * Filter the query on the ORGANISATION column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisation('fooValue');   // WHERE ORGANISATION = 'fooValue'
     * $query->filterByOrganisation('%fooValue%'); // WHERE ORGANISATION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByOrganisation($organisation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisation)) {
                $organisation = str_replace('*', '%', $organisation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::ORGANISATION, $organisation, $comparison);
    }

    /**
     * Filter the query on the ID_ORIGINE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdOrigine(1234); // WHERE ID_ORIGINE = 1234
     * $query->filterByIdOrigine(array(12, 34)); // WHERE ID_ORIGINE IN (12, 34)
     * $query->filterByIdOrigine(array('min' => 12)); // WHERE ID_ORIGINE >= 12
     * $query->filterByIdOrigine(array('max' => 12)); // WHERE ID_ORIGINE <= 12
     * </code>
     *
     * @param     mixed $idOrigine The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByIdOrigine($idOrigine = null, $comparison = null)
    {
        if (is_array($idOrigine)) {
            $useMinMax = false;
            if (isset($idOrigine['min'])) {
                $this->addUsingAlias(DemandePeer::ID_ORIGINE, $idOrigine['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOrigine['max'])) {
                $this->addUsingAlias(DemandePeer::ID_ORIGINE, $idOrigine['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::ID_ORIGINE, $idOrigine, $comparison);
    }

    /**
     * Filter the query on the ID_AGENT_CREATEUR column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentCreateur(1234); // WHERE ID_AGENT_CREATEUR = 1234
     * $query->filterByIdAgentCreateur(array(12, 34)); // WHERE ID_AGENT_CREATEUR IN (12, 34)
     * $query->filterByIdAgentCreateur(array('min' => 12)); // WHERE ID_AGENT_CREATEUR >= 12
     * $query->filterByIdAgentCreateur(array('max' => 12)); // WHERE ID_AGENT_CREATEUR <= 12
     * </code>
     *
     * @param     mixed $idAgentCreateur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByIdAgentCreateur($idAgentCreateur = null, $comparison = null)
    {
        if (is_array($idAgentCreateur)) {
            $useMinMax = false;
            if (isset($idAgentCreateur['min'])) {
                $this->addUsingAlias(DemandePeer::ID_AGENT_CREATEUR, $idAgentCreateur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentCreateur['max'])) {
                $this->addUsingAlias(DemandePeer::ID_AGENT_CREATEUR, $idAgentCreateur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::ID_AGENT_CREATEUR, $idAgentCreateur, $comparison);
    }

    /**
     * Filter the query on the ID_ENTITE_CREATRICE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntiteCreatrice(1234); // WHERE ID_ENTITE_CREATRICE = 1234
     * $query->filterByIdEntiteCreatrice(array(12, 34)); // WHERE ID_ENTITE_CREATRICE IN (12, 34)
     * $query->filterByIdEntiteCreatrice(array('min' => 12)); // WHERE ID_ENTITE_CREATRICE >= 12
     * $query->filterByIdEntiteCreatrice(array('max' => 12)); // WHERE ID_ENTITE_CREATRICE <= 12
     * </code>
     *
     * @param     mixed $idEntiteCreatrice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByIdEntiteCreatrice($idEntiteCreatrice = null, $comparison = null)
    {
        if (is_array($idEntiteCreatrice)) {
            $useMinMax = false;
            if (isset($idEntiteCreatrice['min'])) {
                $this->addUsingAlias(DemandePeer::ID_ENTITE_CREATRICE, $idEntiteCreatrice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntiteCreatrice['max'])) {
                $this->addUsingAlias(DemandePeer::ID_ENTITE_CREATRICE, $idEntiteCreatrice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::ID_ENTITE_CREATRICE, $idEntiteCreatrice, $comparison);
    }

    /**
     * Filter the query on the SUPPRIME column
     *
     * Example usage:
     * <code>
     * $query->filterBySupprime('fooValue');   // WHERE SUPPRIME = 'fooValue'
     * $query->filterBySupprime('%fooValue%'); // WHERE SUPPRIME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $supprime The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterBySupprime($supprime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($supprime)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $supprime)) {
                $supprime = str_replace('*', '%', $supprime);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::SUPPRIME, $supprime, $comparison);
    }

    /**
     * Filter the query on the SOURCE column
     *
     * Example usage:
     * <code>
     * $query->filterBySource(1234); // WHERE SOURCE = 1234
     * $query->filterBySource(array(12, 34)); // WHERE SOURCE IN (12, 34)
     * $query->filterBySource(array('min' => 12)); // WHERE SOURCE >= 12
     * $query->filterBySource(array('max' => 12)); // WHERE SOURCE <= 12
     * </code>
     *
     * @param     mixed $source The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterBySource($source = null, $comparison = null)
    {
        if (is_array($source)) {
            $useMinMax = false;
            if (isset($source['min'])) {
                $this->addUsingAlias(DemandePeer::SOURCE, $source['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($source['max'])) {
                $this->addUsingAlias(DemandePeer::SOURCE, $source['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::SOURCE, $source, $comparison);
    }

    /**
     * Filter the query on the DETAIL_SOURCE column
     *
     * Example usage:
     * <code>
     * $query->filterByDetailSource('fooValue');   // WHERE DETAIL_SOURCE = 'fooValue'
     * $query->filterByDetailSource('%fooValue%'); // WHERE DETAIL_SOURCE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $detailSource The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByDetailSource($detailSource = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($detailSource)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $detailSource)) {
                $detailSource = str_replace('*', '%', $detailSource);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::DETAIL_SOURCE, $detailSource, $comparison);
    }

    /**
     * Filter the query on the FORMAT column
     *
     * Example usage:
     * <code>
     * $query->filterByFormat(1234); // WHERE FORMAT = 1234
     * $query->filterByFormat(array(12, 34)); // WHERE FORMAT IN (12, 34)
     * $query->filterByFormat(array('min' => 12)); // WHERE FORMAT >= 12
     * $query->filterByFormat(array('max' => 12)); // WHERE FORMAT <= 12
     * </code>
     *
     * @param     mixed $format The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByFormat($format = null, $comparison = null)
    {
        if (is_array($format)) {
            $useMinMax = false;
            if (isset($format['min'])) {
                $this->addUsingAlias(DemandePeer::FORMAT, $format['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($format['max'])) {
                $this->addUsingAlias(DemandePeer::FORMAT, $format['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::FORMAT, $format, $comparison);
    }

    /**
     * Filter the query on the REFERENCE_INTERNE column
     *
     * Example usage:
     * <code>
     * $query->filterByReferenceInterne('fooValue');   // WHERE REFERENCE_INTERNE = 'fooValue'
     * $query->filterByReferenceInterne('%fooValue%'); // WHERE REFERENCE_INTERNE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $referenceInterne The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByReferenceInterne($referenceInterne = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($referenceInterne)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $referenceInterne)) {
                $referenceInterne = str_replace('*', '%', $referenceInterne);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::REFERENCE_INTERNE, $referenceInterne, $comparison);
    }

    /**
     * Filter the query on the ID_REGION column
     *
     * Example usage:
     * <code>
     * $query->filterByIdRegion(1234); // WHERE ID_REGION = 1234
     * $query->filterByIdRegion(array(12, 34)); // WHERE ID_REGION IN (12, 34)
     * $query->filterByIdRegion(array('min' => 12)); // WHERE ID_REGION >= 12
     * $query->filterByIdRegion(array('max' => 12)); // WHERE ID_REGION <= 12
     * </code>
     *
     * @param     mixed $idRegion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByIdRegion($idRegion = null, $comparison = null)
    {
        if (is_array($idRegion)) {
            $useMinMax = false;
            if (isset($idRegion['min'])) {
                $this->addUsingAlias(DemandePeer::ID_REGION, $idRegion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idRegion['max'])) {
                $this->addUsingAlias(DemandePeer::ID_REGION, $idRegion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::ID_REGION, $idRegion, $comparison);
    }

    /**
     * Filter the query on the ID_PROVINCE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdProvince(1234); // WHERE ID_PROVINCE = 1234
     * $query->filterByIdProvince(array(12, 34)); // WHERE ID_PROVINCE IN (12, 34)
     * $query->filterByIdProvince(array('min' => 12)); // WHERE ID_PROVINCE >= 12
     * $query->filterByIdProvince(array('max' => 12)); // WHERE ID_PROVINCE <= 12
     * </code>
     *
     * @param     mixed $idProvince The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByIdProvince($idProvince = null, $comparison = null)
    {
        if (is_array($idProvince)) {
            $useMinMax = false;
            if (isset($idProvince['min'])) {
                $this->addUsingAlias(DemandePeer::ID_PROVINCE, $idProvince['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProvince['max'])) {
                $this->addUsingAlias(DemandePeer::ID_PROVINCE, $idProvince['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::ID_PROVINCE, $idProvince, $comparison);
    }

    /**
     * Filter the query on the ID_PAYS column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPays(1234); // WHERE ID_PAYS = 1234
     * $query->filterByIdPays(array(12, 34)); // WHERE ID_PAYS IN (12, 34)
     * $query->filterByIdPays(array('min' => 12)); // WHERE ID_PAYS >= 12
     * $query->filterByIdPays(array('max' => 12)); // WHERE ID_PAYS <= 12
     * </code>
     *
     * @param     mixed $idPays The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByIdPays($idPays = null, $comparison = null)
    {
        if (is_array($idPays)) {
            $useMinMax = false;
            if (isset($idPays['min'])) {
                $this->addUsingAlias(DemandePeer::ID_PAYS, $idPays['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPays['max'])) {
                $this->addUsingAlias(DemandePeer::ID_PAYS, $idPays['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::ID_PAYS, $idPays, $comparison);
    }

    /**
     * Filter the query on the DATE_CREATION_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreationDemande('2011-03-14'); // WHERE DATE_CREATION_DEMANDE = '2011-03-14'
     * $query->filterByDateCreationDemande('now'); // WHERE DATE_CREATION_DEMANDE = '2011-03-14'
     * $query->filterByDateCreationDemande(array('max' => 'yesterday')); // WHERE DATE_CREATION_DEMANDE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCreationDemande The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByDateCreationDemande($dateCreationDemande = null, $comparison = null)
    {
        if (is_array($dateCreationDemande)) {
            $useMinMax = false;
            if (isset($dateCreationDemande['min'])) {
                $this->addUsingAlias(DemandePeer::DATE_CREATION_DEMANDE, $dateCreationDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreationDemande['max'])) {
                $this->addUsingAlias(DemandePeer::DATE_CREATION_DEMANDE, $dateCreationDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::DATE_CREATION_DEMANDE, $dateCreationDemande, $comparison);
    }

    /**
     * Filter the query on the ID_ENTITE_CONCERNEE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntiteConcernee(1234); // WHERE ID_ENTITE_CONCERNEE = 1234
     * $query->filterByIdEntiteConcernee(array(12, 34)); // WHERE ID_ENTITE_CONCERNEE IN (12, 34)
     * $query->filterByIdEntiteConcernee(array('min' => 12)); // WHERE ID_ENTITE_CONCERNEE >= 12
     * $query->filterByIdEntiteConcernee(array('max' => 12)); // WHERE ID_ENTITE_CONCERNEE <= 12
     * </code>
     *
     * @param     mixed $idEntiteConcernee The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByIdEntiteConcernee($idEntiteConcernee = null, $comparison = null)
    {
        if (is_array($idEntiteConcernee)) {
            $useMinMax = false;
            if (isset($idEntiteConcernee['min'])) {
                $this->addUsingAlias(DemandePeer::ID_ENTITE_CONCERNEE, $idEntiteConcernee['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntiteConcernee['max'])) {
                $this->addUsingAlias(DemandePeer::ID_ENTITE_CONCERNEE, $idEntiteConcernee['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::ID_ENTITE_CONCERNEE, $idEntiteConcernee, $comparison);
    }

    /**
     * Filter the query on the NOM_ENTITE_CONCERNEE_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomEntiteConcerneeFr('fooValue');   // WHERE NOM_ENTITE_CONCERNEE_FR = 'fooValue'
     * $query->filterByNomEntiteConcerneeFr('%fooValue%'); // WHERE NOM_ENTITE_CONCERNEE_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomEntiteConcerneeFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByNomEntiteConcerneeFr($nomEntiteConcerneeFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomEntiteConcerneeFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomEntiteConcerneeFr)) {
                $nomEntiteConcerneeFr = str_replace('*', '%', $nomEntiteConcerneeFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::NOM_ENTITE_CONCERNEE_FR, $nomEntiteConcerneeFr, $comparison);
    }

    /**
     * Filter the query on the NOM_ENTITE_CONCERNEE_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomEntiteConcerneeAr('fooValue');   // WHERE NOM_ENTITE_CONCERNEE_AR = 'fooValue'
     * $query->filterByNomEntiteConcerneeAr('%fooValue%'); // WHERE NOM_ENTITE_CONCERNEE_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomEntiteConcerneeAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByNomEntiteConcerneeAr($nomEntiteConcerneeAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomEntiteConcerneeAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomEntiteConcerneeAr)) {
                $nomEntiteConcerneeAr = str_replace('*', '%', $nomEntiteConcerneeAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::NOM_ENTITE_CONCERNEE_AR, $nomEntiteConcerneeAr, $comparison);
    }

    /**
     * Filter the query on the ID_ENTITE_CONCERNEE_CITOYEN column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntiteConcerneeCitoyen(1234); // WHERE ID_ENTITE_CONCERNEE_CITOYEN = 1234
     * $query->filterByIdEntiteConcerneeCitoyen(array(12, 34)); // WHERE ID_ENTITE_CONCERNEE_CITOYEN IN (12, 34)
     * $query->filterByIdEntiteConcerneeCitoyen(array('min' => 12)); // WHERE ID_ENTITE_CONCERNEE_CITOYEN >= 12
     * $query->filterByIdEntiteConcerneeCitoyen(array('max' => 12)); // WHERE ID_ENTITE_CONCERNEE_CITOYEN <= 12
     * </code>
     *
     * @param     mixed $idEntiteConcerneeCitoyen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByIdEntiteConcerneeCitoyen($idEntiteConcerneeCitoyen = null, $comparison = null)
    {
        if (is_array($idEntiteConcerneeCitoyen)) {
            $useMinMax = false;
            if (isset($idEntiteConcerneeCitoyen['min'])) {
                $this->addUsingAlias(DemandePeer::ID_ENTITE_CONCERNEE_CITOYEN, $idEntiteConcerneeCitoyen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntiteConcerneeCitoyen['max'])) {
                $this->addUsingAlias(DemandePeer::ID_ENTITE_CONCERNEE_CITOYEN, $idEntiteConcerneeCitoyen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::ID_ENTITE_CONCERNEE_CITOYEN, $idEntiteConcerneeCitoyen, $comparison);
    }

    /**
     * Filter the query on the NOM_ENTITE_CONCERNEE_CITOYEN_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomEntiteConcerneeCitoyenFr('fooValue');   // WHERE NOM_ENTITE_CONCERNEE_CITOYEN_FR = 'fooValue'
     * $query->filterByNomEntiteConcerneeCitoyenFr('%fooValue%'); // WHERE NOM_ENTITE_CONCERNEE_CITOYEN_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomEntiteConcerneeCitoyenFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByNomEntiteConcerneeCitoyenFr($nomEntiteConcerneeCitoyenFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomEntiteConcerneeCitoyenFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomEntiteConcerneeCitoyenFr)) {
                $nomEntiteConcerneeCitoyenFr = str_replace('*', '%', $nomEntiteConcerneeCitoyenFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::NOM_ENTITE_CONCERNEE_CITOYEN_FR, $nomEntiteConcerneeCitoyenFr, $comparison);
    }

    /**
     * Filter the query on the NOM_ENTITE_CONCERNEE_CITOYEN_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomEntiteConcerneeCitoyenAr('fooValue');   // WHERE NOM_ENTITE_CONCERNEE_CITOYEN_AR = 'fooValue'
     * $query->filterByNomEntiteConcerneeCitoyenAr('%fooValue%'); // WHERE NOM_ENTITE_CONCERNEE_CITOYEN_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomEntiteConcerneeCitoyenAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByNomEntiteConcerneeCitoyenAr($nomEntiteConcerneeCitoyenAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomEntiteConcerneeCitoyenAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomEntiteConcerneeCitoyenAr)) {
                $nomEntiteConcerneeCitoyenAr = str_replace('*', '%', $nomEntiteConcerneeCitoyenAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::NOM_ENTITE_CONCERNEE_CITOYEN_AR, $nomEntiteConcerneeCitoyenAr, $comparison);
    }

    /**
     * Filter the query on the TYPE_REQUERANT column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeRequerant(1234); // WHERE TYPE_REQUERANT = 1234
     * $query->filterByTypeRequerant(array(12, 34)); // WHERE TYPE_REQUERANT IN (12, 34)
     * $query->filterByTypeRequerant(array('min' => 12)); // WHERE TYPE_REQUERANT >= 12
     * $query->filterByTypeRequerant(array('max' => 12)); // WHERE TYPE_REQUERANT <= 12
     * </code>
     *
     * @param     mixed $typeRequerant The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByTypeRequerant($typeRequerant = null, $comparison = null)
    {
        if (is_array($typeRequerant)) {
            $useMinMax = false;
            if (isset($typeRequerant['min'])) {
                $this->addUsingAlias(DemandePeer::TYPE_REQUERANT, $typeRequerant['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeRequerant['max'])) {
                $this->addUsingAlias(DemandePeer::TYPE_REQUERANT, $typeRequerant['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::TYPE_REQUERANT, $typeRequerant, $comparison);
    }

    /**
     * Filter the query on the CANAL_DEPOT column
     *
     * Example usage:
     * <code>
     * $query->filterByCanalDepot('fooValue');   // WHERE CANAL_DEPOT = 'fooValue'
     * $query->filterByCanalDepot('%fooValue%'); // WHERE CANAL_DEPOT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $canalDepot The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByCanalDepot($canalDepot = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($canalDepot)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $canalDepot)) {
                $canalDepot = str_replace('*', '%', $canalDepot);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::CANAL_DEPOT, $canalDepot, $comparison);
    }

    /**
     * Filter the query on the ID_EXTERNE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdExterne(1234); // WHERE ID_EXTERNE = 1234
     * $query->filterByIdExterne(array(12, 34)); // WHERE ID_EXTERNE IN (12, 34)
     * $query->filterByIdExterne(array('min' => 12)); // WHERE ID_EXTERNE >= 12
     * $query->filterByIdExterne(array('max' => 12)); // WHERE ID_EXTERNE <= 12
     * </code>
     *
     * @param     mixed $idExterne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByIdExterne($idExterne = null, $comparison = null)
    {
        if (is_array($idExterne)) {
            $useMinMax = false;
            if (isset($idExterne['min'])) {
                $this->addUsingAlias(DemandePeer::ID_EXTERNE, $idExterne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idExterne['max'])) {
                $this->addUsingAlias(DemandePeer::ID_EXTERNE, $idExterne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::ID_EXTERNE, $idExterne, $comparison);
    }

    /**
     * Filter the query on the DATE_ENVOI_REPONSE column
     *
     * Example usage:
     * <code>
     * $query->filterByDateEnvoiReponse('2011-03-14'); // WHERE DATE_ENVOI_REPONSE = '2011-03-14'
     * $query->filterByDateEnvoiReponse('now'); // WHERE DATE_ENVOI_REPONSE = '2011-03-14'
     * $query->filterByDateEnvoiReponse(array('max' => 'yesterday')); // WHERE DATE_ENVOI_REPONSE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateEnvoiReponse The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByDateEnvoiReponse($dateEnvoiReponse = null, $comparison = null)
    {
        if (is_array($dateEnvoiReponse)) {
            $useMinMax = false;
            if (isset($dateEnvoiReponse['min'])) {
                $this->addUsingAlias(DemandePeer::DATE_ENVOI_REPONSE, $dateEnvoiReponse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateEnvoiReponse['max'])) {
                $this->addUsingAlias(DemandePeer::DATE_ENVOI_REPONSE, $dateEnvoiReponse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::DATE_ENVOI_REPONSE, $dateEnvoiReponse, $comparison);
    }

    /**
     * Filter the query on the ETAT_ENVOI_REPONSE column
     *
     * Example usage:
     * <code>
     * $query->filterByEtatEnvoiReponse('fooValue');   // WHERE ETAT_ENVOI_REPONSE = 'fooValue'
     * $query->filterByEtatEnvoiReponse('%fooValue%'); // WHERE ETAT_ENVOI_REPONSE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etatEnvoiReponse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByEtatEnvoiReponse($etatEnvoiReponse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etatEnvoiReponse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etatEnvoiReponse)) {
                $etatEnvoiReponse = str_replace('*', '%', $etatEnvoiReponse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::ETAT_ENVOI_REPONSE, $etatEnvoiReponse, $comparison);
    }

    /**
     * Filter the query on the ETAT_ENVOI column
     *
     * Example usage:
     * <code>
     * $query->filterByEtatEnvoi('fooValue');   // WHERE ETAT_ENVOI = 'fooValue'
     * $query->filterByEtatEnvoi('%fooValue%'); // WHERE ETAT_ENVOI LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etatEnvoi The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByEtatEnvoi($etatEnvoi = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etatEnvoi)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etatEnvoi)) {
                $etatEnvoi = str_replace('*', '%', $etatEnvoi);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::ETAT_ENVOI, $etatEnvoi, $comparison);
    }

    /**
     * Filter the query on the DATE_ENVOI column
     *
     * Example usage:
     * <code>
     * $query->filterByDateEnvoi('2011-03-14'); // WHERE DATE_ENVOI = '2011-03-14'
     * $query->filterByDateEnvoi('now'); // WHERE DATE_ENVOI = '2011-03-14'
     * $query->filterByDateEnvoi(array('max' => 'yesterday')); // WHERE DATE_ENVOI > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateEnvoi The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByDateEnvoi($dateEnvoi = null, $comparison = null)
    {
        if (is_array($dateEnvoi)) {
            $useMinMax = false;
            if (isset($dateEnvoi['min'])) {
                $this->addUsingAlias(DemandePeer::DATE_ENVOI, $dateEnvoi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateEnvoi['max'])) {
                $this->addUsingAlias(DemandePeer::DATE_ENVOI, $dateEnvoi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::DATE_ENVOI, $dateEnvoi, $comparison);
    }

    /**
     * Filter the query on the NUMERO_EXTERNE column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroExterne('fooValue');   // WHERE NUMERO_EXTERNE = 'fooValue'
     * $query->filterByNumeroExterne('%fooValue%'); // WHERE NUMERO_EXTERNE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroExterne The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByNumeroExterne($numeroExterne = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroExterne)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroExterne)) {
                $numeroExterne = str_replace('*', '%', $numeroExterne);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::NUMERO_EXTERNE, $numeroExterne, $comparison);
    }

    /**
     * Filter the query on the OBJET_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByObjetDemande('fooValue');   // WHERE OBJET_DEMANDE = 'fooValue'
     * $query->filterByObjetDemande('%fooValue%'); // WHERE OBJET_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $objetDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByObjetDemande($objetDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($objetDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $objetDemande)) {
                $objetDemande = str_replace('*', '%', $objetDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::OBJET_DEMANDE, $objetDemande, $comparison);
    }

    /**
     * Filter the query on the TAG_INTERFACE column
     *
     * Example usage:
     * <code>
     * $query->filterByTagInterface('fooValue');   // WHERE TAG_INTERFACE = 'fooValue'
     * $query->filterByTagInterface('%fooValue%'); // WHERE TAG_INTERFACE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tagInterface The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByTagInterface($tagInterface = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tagInterface)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tagInterface)) {
                $tagInterface = str_replace('*', '%', $tagInterface);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::TAG_INTERFACE, $tagInterface, $comparison);
    }

    /**
     * Filter the query on the CHAMP_SUPP_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByChampSupp1('fooValue');   // WHERE CHAMP_SUPP_1 = 'fooValue'
     * $query->filterByChampSupp1('%fooValue%'); // WHERE CHAMP_SUPP_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $champSupp1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByChampSupp1($champSupp1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($champSupp1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $champSupp1)) {
                $champSupp1 = str_replace('*', '%', $champSupp1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::CHAMP_SUPP_1, $champSupp1, $comparison);
    }

    /**
     * Filter the query on the CHAMP_SUPP_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByChampSupp2('fooValue');   // WHERE CHAMP_SUPP_2 = 'fooValue'
     * $query->filterByChampSupp2('%fooValue%'); // WHERE CHAMP_SUPP_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $champSupp2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByChampSupp2($champSupp2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($champSupp2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $champSupp2)) {
                $champSupp2 = str_replace('*', '%', $champSupp2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::CHAMP_SUPP_2, $champSupp2, $comparison);
    }

    /**
     * Filter the query on the CHAMP_SUPP_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByChampSupp3('fooValue');   // WHERE CHAMP_SUPP_3 = 'fooValue'
     * $query->filterByChampSupp3('%fooValue%'); // WHERE CHAMP_SUPP_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $champSupp3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByChampSupp3($champSupp3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($champSupp3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $champSupp3)) {
                $champSupp3 = str_replace('*', '%', $champSupp3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::CHAMP_SUPP_3, $champSupp3, $comparison);
    }

    /**
     * Filter the query on the CHAMP_SUPP_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByChampSupp4('fooValue');   // WHERE CHAMP_SUPP_4 = 'fooValue'
     * $query->filterByChampSupp4('%fooValue%'); // WHERE CHAMP_SUPP_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $champSupp4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByChampSupp4($champSupp4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($champSupp4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $champSupp4)) {
                $champSupp4 = str_replace('*', '%', $champSupp4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::CHAMP_SUPP_4, $champSupp4, $comparison);
    }

    /**
     * Filter the query on the CHAMP_SUPP_5 column
     *
     * Example usage:
     * <code>
     * $query->filterByChampSupp5('fooValue');   // WHERE CHAMP_SUPP_5 = 'fooValue'
     * $query->filterByChampSupp5('%fooValue%'); // WHERE CHAMP_SUPP_5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $champSupp5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByChampSupp5($champSupp5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($champSupp5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $champSupp5)) {
                $champSupp5 = str_replace('*', '%', $champSupp5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::CHAMP_SUPP_5, $champSupp5, $comparison);
    }

    /**
     * Filter the query on the TYPE_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeDemande(1234); // WHERE TYPE_DEMANDE = 1234
     * $query->filterByTypeDemande(array(12, 34)); // WHERE TYPE_DEMANDE IN (12, 34)
     * $query->filterByTypeDemande(array('min' => 12)); // WHERE TYPE_DEMANDE >= 12
     * $query->filterByTypeDemande(array('max' => 12)); // WHERE TYPE_DEMANDE <= 12
     * </code>
     *
     * @param     mixed $typeDemande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByTypeDemande($typeDemande = null, $comparison = null)
    {
        if (is_array($typeDemande)) {
            $useMinMax = false;
            if (isset($typeDemande['min'])) {
                $this->addUsingAlias(DemandePeer::TYPE_DEMANDE, $typeDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeDemande['max'])) {
                $this->addUsingAlias(DemandePeer::TYPE_DEMANDE, $typeDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::TYPE_DEMANDE, $typeDemande, $comparison);
    }

    /**
     * Filter the query on the ID_AGENT_DESTINATAIRE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentDestinataire(1234); // WHERE ID_AGENT_DESTINATAIRE = 1234
     * $query->filterByIdAgentDestinataire(array(12, 34)); // WHERE ID_AGENT_DESTINATAIRE IN (12, 34)
     * $query->filterByIdAgentDestinataire(array('min' => 12)); // WHERE ID_AGENT_DESTINATAIRE >= 12
     * $query->filterByIdAgentDestinataire(array('max' => 12)); // WHERE ID_AGENT_DESTINATAIRE <= 12
     * </code>
     *
     * @param     mixed $idAgentDestinataire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByIdAgentDestinataire($idAgentDestinataire = null, $comparison = null)
    {
        if (is_array($idAgentDestinataire)) {
            $useMinMax = false;
            if (isset($idAgentDestinataire['min'])) {
                $this->addUsingAlias(DemandePeer::ID_AGENT_DESTINATAIRE, $idAgentDestinataire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentDestinataire['max'])) {
                $this->addUsingAlias(DemandePeer::ID_AGENT_DESTINATAIRE, $idAgentDestinataire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::ID_AGENT_DESTINATAIRE, $idAgentDestinataire, $comparison);
    }

    /**
     * Filter the query on the NOM_AGENT_DESTINATAIRE_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomAgentDestinataireFr('fooValue');   // WHERE NOM_AGENT_DESTINATAIRE_FR = 'fooValue'
     * $query->filterByNomAgentDestinataireFr('%fooValue%'); // WHERE NOM_AGENT_DESTINATAIRE_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomAgentDestinataireFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByNomAgentDestinataireFr($nomAgentDestinataireFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomAgentDestinataireFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomAgentDestinataireFr)) {
                $nomAgentDestinataireFr = str_replace('*', '%', $nomAgentDestinataireFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::NOM_AGENT_DESTINATAIRE_FR, $nomAgentDestinataireFr, $comparison);
    }

    /**
     * Filter the query on the PRENOM_AGENT_DESTINATAIRE_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenomAgentDestinataireFr('fooValue');   // WHERE PRENOM_AGENT_DESTINATAIRE_FR = 'fooValue'
     * $query->filterByPrenomAgentDestinataireFr('%fooValue%'); // WHERE PRENOM_AGENT_DESTINATAIRE_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenomAgentDestinataireFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByPrenomAgentDestinataireFr($prenomAgentDestinataireFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenomAgentDestinataireFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenomAgentDestinataireFr)) {
                $prenomAgentDestinataireFr = str_replace('*', '%', $prenomAgentDestinataireFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::PRENOM_AGENT_DESTINATAIRE_FR, $prenomAgentDestinataireFr, $comparison);
    }

    /**
     * Filter the query on the NOM_AGENT_DESTINATAIRE_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomAgentDestinataireAr('fooValue');   // WHERE NOM_AGENT_DESTINATAIRE_AR = 'fooValue'
     * $query->filterByNomAgentDestinataireAr('%fooValue%'); // WHERE NOM_AGENT_DESTINATAIRE_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomAgentDestinataireAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByNomAgentDestinataireAr($nomAgentDestinataireAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomAgentDestinataireAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomAgentDestinataireAr)) {
                $nomAgentDestinataireAr = str_replace('*', '%', $nomAgentDestinataireAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::NOM_AGENT_DESTINATAIRE_AR, $nomAgentDestinataireAr, $comparison);
    }

    /**
     * Filter the query on the PRENOM_AGENT_DESTINATAIRE_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenomAgentDestinataireAr('fooValue');   // WHERE PRENOM_AGENT_DESTINATAIRE_AR = 'fooValue'
     * $query->filterByPrenomAgentDestinataireAr('%fooValue%'); // WHERE PRENOM_AGENT_DESTINATAIRE_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenomAgentDestinataireAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByPrenomAgentDestinataireAr($prenomAgentDestinataireAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenomAgentDestinataireAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenomAgentDestinataireAr)) {
                $prenomAgentDestinataireAr = str_replace('*', '%', $prenomAgentDestinataireAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::PRENOM_AGENT_DESTINATAIRE_AR, $prenomAgentDestinataireAr, $comparison);
    }

    /**
     * Filter the query on the ID_AGENT_SIGNATAIRE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentSignataire(1234); // WHERE ID_AGENT_SIGNATAIRE = 1234
     * $query->filterByIdAgentSignataire(array(12, 34)); // WHERE ID_AGENT_SIGNATAIRE IN (12, 34)
     * $query->filterByIdAgentSignataire(array('min' => 12)); // WHERE ID_AGENT_SIGNATAIRE >= 12
     * $query->filterByIdAgentSignataire(array('max' => 12)); // WHERE ID_AGENT_SIGNATAIRE <= 12
     * </code>
     *
     * @param     mixed $idAgentSignataire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByIdAgentSignataire($idAgentSignataire = null, $comparison = null)
    {
        if (is_array($idAgentSignataire)) {
            $useMinMax = false;
            if (isset($idAgentSignataire['min'])) {
                $this->addUsingAlias(DemandePeer::ID_AGENT_SIGNATAIRE, $idAgentSignataire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentSignataire['max'])) {
                $this->addUsingAlias(DemandePeer::ID_AGENT_SIGNATAIRE, $idAgentSignataire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::ID_AGENT_SIGNATAIRE, $idAgentSignataire, $comparison);
    }

    /**
     * Filter the query on the NOM_AGENT_SIGNATAIRE_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomAgentSignataireFr('fooValue');   // WHERE NOM_AGENT_SIGNATAIRE_FR = 'fooValue'
     * $query->filterByNomAgentSignataireFr('%fooValue%'); // WHERE NOM_AGENT_SIGNATAIRE_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomAgentSignataireFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByNomAgentSignataireFr($nomAgentSignataireFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomAgentSignataireFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomAgentSignataireFr)) {
                $nomAgentSignataireFr = str_replace('*', '%', $nomAgentSignataireFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::NOM_AGENT_SIGNATAIRE_FR, $nomAgentSignataireFr, $comparison);
    }

    /**
     * Filter the query on the NOM_AGENT_SIGNATAIRE_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomAgentSignataireAr('fooValue');   // WHERE NOM_AGENT_SIGNATAIRE_AR = 'fooValue'
     * $query->filterByNomAgentSignataireAr('%fooValue%'); // WHERE NOM_AGENT_SIGNATAIRE_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomAgentSignataireAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByNomAgentSignataireAr($nomAgentSignataireAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomAgentSignataireAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomAgentSignataireAr)) {
                $nomAgentSignataireAr = str_replace('*', '%', $nomAgentSignataireAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::NOM_AGENT_SIGNATAIRE_AR, $nomAgentSignataireAr, $comparison);
    }

    /**
     * Filter the query on the PRENOM_AGENT_SIGNATAIRE_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenomAgentSignataireAr('fooValue');   // WHERE PRENOM_AGENT_SIGNATAIRE_AR = 'fooValue'
     * $query->filterByPrenomAgentSignataireAr('%fooValue%'); // WHERE PRENOM_AGENT_SIGNATAIRE_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenomAgentSignataireAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByPrenomAgentSignataireAr($prenomAgentSignataireAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenomAgentSignataireAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenomAgentSignataireAr)) {
                $prenomAgentSignataireAr = str_replace('*', '%', $prenomAgentSignataireAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::PRENOM_AGENT_SIGNATAIRE_AR, $prenomAgentSignataireAr, $comparison);
    }

    /**
     * Filter the query on the PRENOM_AGENT_SIGNATAIRE_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenomAgentSignataireFr('fooValue');   // WHERE PRENOM_AGENT_SIGNATAIRE_FR = 'fooValue'
     * $query->filterByPrenomAgentSignataireFr('%fooValue%'); // WHERE PRENOM_AGENT_SIGNATAIRE_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenomAgentSignataireFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByPrenomAgentSignataireFr($prenomAgentSignataireFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenomAgentSignataireFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenomAgentSignataireFr)) {
                $prenomAgentSignataireFr = str_replace('*', '%', $prenomAgentSignataireFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::PRENOM_AGENT_SIGNATAIRE_FR, $prenomAgentSignataireFr, $comparison);
    }

    /**
     * Filter the query on the ID_AGENT_EMETTEUR column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentEmetteur(1234); // WHERE ID_AGENT_EMETTEUR = 1234
     * $query->filterByIdAgentEmetteur(array(12, 34)); // WHERE ID_AGENT_EMETTEUR IN (12, 34)
     * $query->filterByIdAgentEmetteur(array('min' => 12)); // WHERE ID_AGENT_EMETTEUR >= 12
     * $query->filterByIdAgentEmetteur(array('max' => 12)); // WHERE ID_AGENT_EMETTEUR <= 12
     * </code>
     *
     * @param     mixed $idAgentEmetteur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByIdAgentEmetteur($idAgentEmetteur = null, $comparison = null)
    {
        if (is_array($idAgentEmetteur)) {
            $useMinMax = false;
            if (isset($idAgentEmetteur['min'])) {
                $this->addUsingAlias(DemandePeer::ID_AGENT_EMETTEUR, $idAgentEmetteur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentEmetteur['max'])) {
                $this->addUsingAlias(DemandePeer::ID_AGENT_EMETTEUR, $idAgentEmetteur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::ID_AGENT_EMETTEUR, $idAgentEmetteur, $comparison);
    }

    /**
     * Filter the query on the NOM_AGENT_EMETTEUR_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomAgentEmetteurFr('fooValue');   // WHERE NOM_AGENT_EMETTEUR_FR = 'fooValue'
     * $query->filterByNomAgentEmetteurFr('%fooValue%'); // WHERE NOM_AGENT_EMETTEUR_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomAgentEmetteurFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByNomAgentEmetteurFr($nomAgentEmetteurFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomAgentEmetteurFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomAgentEmetteurFr)) {
                $nomAgentEmetteurFr = str_replace('*', '%', $nomAgentEmetteurFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::NOM_AGENT_EMETTEUR_FR, $nomAgentEmetteurFr, $comparison);
    }

    /**
     * Filter the query on the NOM_AGENT_EMETTEUR_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomAgentEmetteurAr('fooValue');   // WHERE NOM_AGENT_EMETTEUR_AR = 'fooValue'
     * $query->filterByNomAgentEmetteurAr('%fooValue%'); // WHERE NOM_AGENT_EMETTEUR_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomAgentEmetteurAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByNomAgentEmetteurAr($nomAgentEmetteurAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomAgentEmetteurAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomAgentEmetteurAr)) {
                $nomAgentEmetteurAr = str_replace('*', '%', $nomAgentEmetteurAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::NOM_AGENT_EMETTEUR_AR, $nomAgentEmetteurAr, $comparison);
    }

    /**
     * Filter the query on the PRENOM_AGENT_EMETTEUR_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenomAgentEmetteurAr('fooValue');   // WHERE PRENOM_AGENT_EMETTEUR_AR = 'fooValue'
     * $query->filterByPrenomAgentEmetteurAr('%fooValue%'); // WHERE PRENOM_AGENT_EMETTEUR_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenomAgentEmetteurAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByPrenomAgentEmetteurAr($prenomAgentEmetteurAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenomAgentEmetteurAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenomAgentEmetteurAr)) {
                $prenomAgentEmetteurAr = str_replace('*', '%', $prenomAgentEmetteurAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::PRENOM_AGENT_EMETTEUR_AR, $prenomAgentEmetteurAr, $comparison);
    }

    /**
     * Filter the query on the PRENOM_AGENT_EMETTEUR_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenomAgentEmetteurFr('fooValue');   // WHERE PRENOM_AGENT_EMETTEUR_FR = 'fooValue'
     * $query->filterByPrenomAgentEmetteurFr('%fooValue%'); // WHERE PRENOM_AGENT_EMETTEUR_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenomAgentEmetteurFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByPrenomAgentEmetteurFr($prenomAgentEmetteurFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenomAgentEmetteurFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenomAgentEmetteurFr)) {
                $prenomAgentEmetteurFr = str_replace('*', '%', $prenomAgentEmetteurFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::PRENOM_AGENT_EMETTEUR_FR, $prenomAgentEmetteurFr, $comparison);
    }

    /**
     * Filter the query on the REPONSE_OBLIGATOIRE column
     *
     * Example usage:
     * <code>
     * $query->filterByReponseObligatoire('fooValue');   // WHERE REPONSE_OBLIGATOIRE = 'fooValue'
     * $query->filterByReponseObligatoire('%fooValue%'); // WHERE REPONSE_OBLIGATOIRE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reponseObligatoire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByReponseObligatoire($reponseObligatoire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reponseObligatoire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reponseObligatoire)) {
                $reponseObligatoire = str_replace('*', '%', $reponseObligatoire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::REPONSE_OBLIGATOIRE, $reponseObligatoire, $comparison);
    }

    /**
     * Filter the query on the CODE_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeDemande(1234); // WHERE CODE_DEMANDE = 1234
     * $query->filterByCodeDemande(array(12, 34)); // WHERE CODE_DEMANDE IN (12, 34)
     * $query->filterByCodeDemande(array('min' => 12)); // WHERE CODE_DEMANDE >= 12
     * $query->filterByCodeDemande(array('max' => 12)); // WHERE CODE_DEMANDE <= 12
     * </code>
     *
     * @param     mixed $codeDemande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByCodeDemande($codeDemande = null, $comparison = null)
    {
        if (is_array($codeDemande)) {
            $useMinMax = false;
            if (isset($codeDemande['min'])) {
                $this->addUsingAlias(DemandePeer::CODE_DEMANDE, $codeDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($codeDemande['max'])) {
                $this->addUsingAlias(DemandePeer::CODE_DEMANDE, $codeDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::CODE_DEMANDE, $codeDemande, $comparison);
    }

    /**
     * Filter the query on the CODE_PROVISOIRE column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeProvisoire(1234); // WHERE CODE_PROVISOIRE = 1234
     * $query->filterByCodeProvisoire(array(12, 34)); // WHERE CODE_PROVISOIRE IN (12, 34)
     * $query->filterByCodeProvisoire(array('min' => 12)); // WHERE CODE_PROVISOIRE >= 12
     * $query->filterByCodeProvisoire(array('max' => 12)); // WHERE CODE_PROVISOIRE <= 12
     * </code>
     *
     * @param     mixed $codeProvisoire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByCodeProvisoire($codeProvisoire = null, $comparison = null)
    {
        if (is_array($codeProvisoire)) {
            $useMinMax = false;
            if (isset($codeProvisoire['min'])) {
                $this->addUsingAlias(DemandePeer::CODE_PROVISOIRE, $codeProvisoire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($codeProvisoire['max'])) {
                $this->addUsingAlias(DemandePeer::CODE_PROVISOIRE, $codeProvisoire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::CODE_PROVISOIRE, $codeProvisoire, $comparison);
    }

    /**
     * Filter the query on the TAG_GATEWAY column
     *
     * Example usage:
     * <code>
     * $query->filterByTagGateway('fooValue');   // WHERE TAG_GATEWAY = 'fooValue'
     * $query->filterByTagGateway('%fooValue%'); // WHERE TAG_GATEWAY LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tagGateway The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByTagGateway($tagGateway = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tagGateway)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tagGateway)) {
                $tagGateway = str_replace('*', '%', $tagGateway);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::TAG_GATEWAY, $tagGateway, $comparison);
    }

    /**
     * Filter the query on the ID_UTILISATEUR_GATEWAY column
     *
     * Example usage:
     * <code>
     * $query->filterByIdUtilisateurGateway('fooValue');   // WHERE ID_UTILISATEUR_GATEWAY = 'fooValue'
     * $query->filterByIdUtilisateurGateway('%fooValue%'); // WHERE ID_UTILISATEUR_GATEWAY LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idUtilisateurGateway The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByIdUtilisateurGateway($idUtilisateurGateway = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idUtilisateurGateway)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idUtilisateurGateway)) {
                $idUtilisateurGateway = str_replace('*', '%', $idUtilisateurGateway);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::ID_UTILISATEUR_GATEWAY, $idUtilisateurGateway, $comparison);
    }

    /**
     * Filter the query on the CHAMP_SUPP_THEME_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByChampSuppTheme1('fooValue');   // WHERE CHAMP_SUPP_THEME_1 = 'fooValue'
     * $query->filterByChampSuppTheme1('%fooValue%'); // WHERE CHAMP_SUPP_THEME_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $champSuppTheme1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByChampSuppTheme1($champSuppTheme1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($champSuppTheme1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $champSuppTheme1)) {
                $champSuppTheme1 = str_replace('*', '%', $champSuppTheme1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::CHAMP_SUPP_THEME_1, $champSuppTheme1, $comparison);
    }

    /**
     * Filter the query on the CHAMP_SUPP_THEME_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByChampSuppTheme2('fooValue');   // WHERE CHAMP_SUPP_THEME_2 = 'fooValue'
     * $query->filterByChampSuppTheme2('%fooValue%'); // WHERE CHAMP_SUPP_THEME_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $champSuppTheme2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByChampSuppTheme2($champSuppTheme2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($champSuppTheme2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $champSuppTheme2)) {
                $champSuppTheme2 = str_replace('*', '%', $champSuppTheme2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::CHAMP_SUPP_THEME_2, $champSuppTheme2, $comparison);
    }

    /**
     * Filter the query on the CHAMP_SUPP_THEME_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByChampSuppTheme3('fooValue');   // WHERE CHAMP_SUPP_THEME_3 = 'fooValue'
     * $query->filterByChampSuppTheme3('%fooValue%'); // WHERE CHAMP_SUPP_THEME_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $champSuppTheme3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByChampSuppTheme3($champSuppTheme3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($champSuppTheme3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $champSuppTheme3)) {
                $champSuppTheme3 = str_replace('*', '%', $champSuppTheme3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::CHAMP_SUPP_THEME_3, $champSuppTheme3, $comparison);
    }

    /**
     * Filter the query on the CHAMP_SUPP_THEME_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByChampSuppTheme4('fooValue');   // WHERE CHAMP_SUPP_THEME_4 = 'fooValue'
     * $query->filterByChampSuppTheme4('%fooValue%'); // WHERE CHAMP_SUPP_THEME_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $champSuppTheme4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByChampSuppTheme4($champSuppTheme4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($champSuppTheme4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $champSuppTheme4)) {
                $champSuppTheme4 = str_replace('*', '%', $champSuppTheme4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::CHAMP_SUPP_THEME_4, $champSuppTheme4, $comparison);
    }

    /**
     * Filter the query on the CHAMP_SUPP_THEME_5 column
     *
     * Example usage:
     * <code>
     * $query->filterByChampSuppTheme5('fooValue');   // WHERE CHAMP_SUPP_THEME_5 = 'fooValue'
     * $query->filterByChampSuppTheme5('%fooValue%'); // WHERE CHAMP_SUPP_THEME_5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $champSuppTheme5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByChampSuppTheme5($champSuppTheme5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($champSuppTheme5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $champSuppTheme5)) {
                $champSuppTheme5 = str_replace('*', '%', $champSuppTheme5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::CHAMP_SUPP_THEME_5, $champSuppTheme5, $comparison);
    }

    /**
     * Filter the query on the ID_TYPE_THEME column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeTheme(1234); // WHERE ID_TYPE_THEME = 1234
     * $query->filterByIdTypeTheme(array(12, 34)); // WHERE ID_TYPE_THEME IN (12, 34)
     * $query->filterByIdTypeTheme(array('min' => 12)); // WHERE ID_TYPE_THEME >= 12
     * $query->filterByIdTypeTheme(array('max' => 12)); // WHERE ID_TYPE_THEME <= 12
     * </code>
     *
     * @param     mixed $idTypeTheme The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByIdTypeTheme($idTypeTheme = null, $comparison = null)
    {
        if (is_array($idTypeTheme)) {
            $useMinMax = false;
            if (isset($idTypeTheme['min'])) {
                $this->addUsingAlias(DemandePeer::ID_TYPE_THEME, $idTypeTheme['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeTheme['max'])) {
                $this->addUsingAlias(DemandePeer::ID_TYPE_THEME, $idTypeTheme['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::ID_TYPE_THEME, $idTypeTheme, $comparison);
    }

    /**
     * Filter the query on the ID_ETAPE_EN_COURS column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEtapeEnCours(1234); // WHERE ID_ETAPE_EN_COURS = 1234
     * $query->filterByIdEtapeEnCours(array(12, 34)); // WHERE ID_ETAPE_EN_COURS IN (12, 34)
     * $query->filterByIdEtapeEnCours(array('min' => 12)); // WHERE ID_ETAPE_EN_COURS >= 12
     * $query->filterByIdEtapeEnCours(array('max' => 12)); // WHERE ID_ETAPE_EN_COURS <= 12
     * </code>
     *
     * @param     mixed $idEtapeEnCours The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByIdEtapeEnCours($idEtapeEnCours = null, $comparison = null)
    {
        if (is_array($idEtapeEnCours)) {
            $useMinMax = false;
            if (isset($idEtapeEnCours['min'])) {
                $this->addUsingAlias(DemandePeer::ID_ETAPE_EN_COURS, $idEtapeEnCours['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEtapeEnCours['max'])) {
                $this->addUsingAlias(DemandePeer::ID_ETAPE_EN_COURS, $idEtapeEnCours['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::ID_ETAPE_EN_COURS, $idEtapeEnCours, $comparison);
    }

    /**
     * Filter the query on the NUMERO_ETAPE_ENCOURS column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroEtapeEncours(1234); // WHERE NUMERO_ETAPE_ENCOURS = 1234
     * $query->filterByNumeroEtapeEncours(array(12, 34)); // WHERE NUMERO_ETAPE_ENCOURS IN (12, 34)
     * $query->filterByNumeroEtapeEncours(array('min' => 12)); // WHERE NUMERO_ETAPE_ENCOURS >= 12
     * $query->filterByNumeroEtapeEncours(array('max' => 12)); // WHERE NUMERO_ETAPE_ENCOURS <= 12
     * </code>
     *
     * @param     mixed $numeroEtapeEncours The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByNumeroEtapeEncours($numeroEtapeEncours = null, $comparison = null)
    {
        if (is_array($numeroEtapeEncours)) {
            $useMinMax = false;
            if (isset($numeroEtapeEncours['min'])) {
                $this->addUsingAlias(DemandePeer::NUMERO_ETAPE_ENCOURS, $numeroEtapeEncours['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numeroEtapeEncours['max'])) {
                $this->addUsingAlias(DemandePeer::NUMERO_ETAPE_ENCOURS, $numeroEtapeEncours['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::NUMERO_ETAPE_ENCOURS, $numeroEtapeEncours, $comparison);
    }

    /**
     * Filter the query on the NOMBRE_ETAPES column
     *
     * Example usage:
     * <code>
     * $query->filterByNombreEtapes(1234); // WHERE NOMBRE_ETAPES = 1234
     * $query->filterByNombreEtapes(array(12, 34)); // WHERE NOMBRE_ETAPES IN (12, 34)
     * $query->filterByNombreEtapes(array('min' => 12)); // WHERE NOMBRE_ETAPES >= 12
     * $query->filterByNombreEtapes(array('max' => 12)); // WHERE NOMBRE_ETAPES <= 12
     * </code>
     *
     * @param     mixed $nombreEtapes The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByNombreEtapes($nombreEtapes = null, $comparison = null)
    {
        if (is_array($nombreEtapes)) {
            $useMinMax = false;
            if (isset($nombreEtapes['min'])) {
                $this->addUsingAlias(DemandePeer::NOMBRE_ETAPES, $nombreEtapes['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nombreEtapes['max'])) {
                $this->addUsingAlias(DemandePeer::NOMBRE_ETAPES, $nombreEtapes['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::NOMBRE_ETAPES, $nombreEtapes, $comparison);
    }

    /**
     * Filter the query on the DERNIER_MESSAGE column
     *
     * Example usage:
     * <code>
     * $query->filterByDernierMessage('fooValue');   // WHERE DERNIER_MESSAGE = 'fooValue'
     * $query->filterByDernierMessage('%fooValue%'); // WHERE DERNIER_MESSAGE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dernierMessage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByDernierMessage($dernierMessage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dernierMessage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dernierMessage)) {
                $dernierMessage = str_replace('*', '%', $dernierMessage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::DERNIER_MESSAGE, $dernierMessage, $comparison);
    }

    /**
     * Filter the query on the LIBELLE_ETAPE_ENCOURS column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleEtapeEncours('fooValue');   // WHERE LIBELLE_ETAPE_ENCOURS = 'fooValue'
     * $query->filterByLibelleEtapeEncours('%fooValue%'); // WHERE LIBELLE_ETAPE_ENCOURS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleEtapeEncours The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByLibelleEtapeEncours($libelleEtapeEncours = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleEtapeEncours)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleEtapeEncours)) {
                $libelleEtapeEncours = str_replace('*', '%', $libelleEtapeEncours);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::LIBELLE_ETAPE_ENCOURS, $libelleEtapeEncours, $comparison);
    }

    /**
     * Filter the query on the DERNIER_ACTEUR column
     *
     * Example usage:
     * <code>
     * $query->filterByDernierActeur('fooValue');   // WHERE DERNIER_ACTEUR = 'fooValue'
     * $query->filterByDernierActeur('%fooValue%'); // WHERE DERNIER_ACTEUR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dernierActeur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByDernierActeur($dernierActeur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dernierActeur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dernierActeur)) {
                $dernierActeur = str_replace('*', '%', $dernierActeur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::DERNIER_ACTEUR, $dernierActeur, $comparison);
    }

    /**
     * Filter the query on the DATE_REPONSE_ETAPE column
     *
     * Example usage:
     * <code>
     * $query->filterByDateReponseEtape('2011-03-14'); // WHERE DATE_REPONSE_ETAPE = '2011-03-14'
     * $query->filterByDateReponseEtape('now'); // WHERE DATE_REPONSE_ETAPE = '2011-03-14'
     * $query->filterByDateReponseEtape(array('max' => 'yesterday')); // WHERE DATE_REPONSE_ETAPE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateReponseEtape The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByDateReponseEtape($dateReponseEtape = null, $comparison = null)
    {
        if (is_array($dateReponseEtape)) {
            $useMinMax = false;
            if (isset($dateReponseEtape['min'])) {
                $this->addUsingAlias(DemandePeer::DATE_REPONSE_ETAPE, $dateReponseEtape['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateReponseEtape['max'])) {
                $this->addUsingAlias(DemandePeer::DATE_REPONSE_ETAPE, $dateReponseEtape['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::DATE_REPONSE_ETAPE, $dateReponseEtape, $comparison);
    }

    /**
     * Filter the query on the ID_ENTITE_RELANCE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntiteRelance(1234); // WHERE ID_ENTITE_RELANCE = 1234
     * $query->filterByIdEntiteRelance(array(12, 34)); // WHERE ID_ENTITE_RELANCE IN (12, 34)
     * $query->filterByIdEntiteRelance(array('min' => 12)); // WHERE ID_ENTITE_RELANCE >= 12
     * $query->filterByIdEntiteRelance(array('max' => 12)); // WHERE ID_ENTITE_RELANCE <= 12
     * </code>
     *
     * @param     mixed $idEntiteRelance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByIdEntiteRelance($idEntiteRelance = null, $comparison = null)
    {
        if (is_array($idEntiteRelance)) {
            $useMinMax = false;
            if (isset($idEntiteRelance['min'])) {
                $this->addUsingAlias(DemandePeer::ID_ENTITE_RELANCE, $idEntiteRelance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntiteRelance['max'])) {
                $this->addUsingAlias(DemandePeer::ID_ENTITE_RELANCE, $idEntiteRelance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::ID_ENTITE_RELANCE, $idEntiteRelance, $comparison);
    }

    /**
     * Filter the query on the ID_AGENT_RELANCE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentRelance(1234); // WHERE ID_AGENT_RELANCE = 1234
     * $query->filterByIdAgentRelance(array(12, 34)); // WHERE ID_AGENT_RELANCE IN (12, 34)
     * $query->filterByIdAgentRelance(array('min' => 12)); // WHERE ID_AGENT_RELANCE >= 12
     * $query->filterByIdAgentRelance(array('max' => 12)); // WHERE ID_AGENT_RELANCE <= 12
     * </code>
     *
     * @param     mixed $idAgentRelance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByIdAgentRelance($idAgentRelance = null, $comparison = null)
    {
        if (is_array($idAgentRelance)) {
            $useMinMax = false;
            if (isset($idAgentRelance['min'])) {
                $this->addUsingAlias(DemandePeer::ID_AGENT_RELANCE, $idAgentRelance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentRelance['max'])) {
                $this->addUsingAlias(DemandePeer::ID_AGENT_RELANCE, $idAgentRelance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::ID_AGENT_RELANCE, $idAgentRelance, $comparison);
    }

    /**
     * Filter the query on the IMPORTANT column
     *
     * Example usage:
     * <code>
     * $query->filterByImportant('fooValue');   // WHERE IMPORTANT = 'fooValue'
     * $query->filterByImportant('%fooValue%'); // WHERE IMPORTANT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $important The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByImportant($important = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($important)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $important)) {
                $important = str_replace('*', '%', $important);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::IMPORTANT, $important, $comparison);
    }

    /**
     * Filter the query on the DATE_ECHEANCE_REPONSE_PROCHE column
     *
     * Example usage:
     * <code>
     * $query->filterByDateEcheanceReponseProche('2011-03-14'); // WHERE DATE_ECHEANCE_REPONSE_PROCHE = '2011-03-14'
     * $query->filterByDateEcheanceReponseProche('now'); // WHERE DATE_ECHEANCE_REPONSE_PROCHE = '2011-03-14'
     * $query->filterByDateEcheanceReponseProche(array('max' => 'yesterday')); // WHERE DATE_ECHEANCE_REPONSE_PROCHE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateEcheanceReponseProche The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByDateEcheanceReponseProche($dateEcheanceReponseProche = null, $comparison = null)
    {
        if (is_array($dateEcheanceReponseProche)) {
            $useMinMax = false;
            if (isset($dateEcheanceReponseProche['min'])) {
                $this->addUsingAlias(DemandePeer::DATE_ECHEANCE_REPONSE_PROCHE, $dateEcheanceReponseProche['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateEcheanceReponseProche['max'])) {
                $this->addUsingAlias(DemandePeer::DATE_ECHEANCE_REPONSE_PROCHE, $dateEcheanceReponseProche['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::DATE_ECHEANCE_REPONSE_PROCHE, $dateEcheanceReponseProche, $comparison);
    }

    /**
     * Filter the query on the URL_EXTERNE column
     *
     * Example usage:
     * <code>
     * $query->filterByUrlExterne('fooValue');   // WHERE URL_EXTERNE = 'fooValue'
     * $query->filterByUrlExterne('%fooValue%'); // WHERE URL_EXTERNE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $urlExterne The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByUrlExterne($urlExterne = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($urlExterne)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $urlExterne)) {
                $urlExterne = str_replace('*', '%', $urlExterne);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::URL_EXTERNE, $urlExterne, $comparison);
    }

    /**
     * Filter the query on the CLOTURE_AUTOMATIQUE column
     *
     * Example usage:
     * <code>
     * $query->filterByClotureAutomatique('fooValue');   // WHERE CLOTURE_AUTOMATIQUE = 'fooValue'
     * $query->filterByClotureAutomatique('%fooValue%'); // WHERE CLOTURE_AUTOMATIQUE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clotureAutomatique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByClotureAutomatique($clotureAutomatique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clotureAutomatique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clotureAutomatique)) {
                $clotureAutomatique = str_replace('*', '%', $clotureAutomatique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::CLOTURE_AUTOMATIQUE, $clotureAutomatique, $comparison);
    }

    /**
     * Filter the query on the DELAI_TRAITEMENT_OUVRABLE column
     *
     * Example usage:
     * <code>
     * $query->filterByDelaiTraitementOuvrable(1234); // WHERE DELAI_TRAITEMENT_OUVRABLE = 1234
     * $query->filterByDelaiTraitementOuvrable(array(12, 34)); // WHERE DELAI_TRAITEMENT_OUVRABLE IN (12, 34)
     * $query->filterByDelaiTraitementOuvrable(array('min' => 12)); // WHERE DELAI_TRAITEMENT_OUVRABLE >= 12
     * $query->filterByDelaiTraitementOuvrable(array('max' => 12)); // WHERE DELAI_TRAITEMENT_OUVRABLE <= 12
     * </code>
     *
     * @param     mixed $delaiTraitementOuvrable The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByDelaiTraitementOuvrable($delaiTraitementOuvrable = null, $comparison = null)
    {
        if (is_array($delaiTraitementOuvrable)) {
            $useMinMax = false;
            if (isset($delaiTraitementOuvrable['min'])) {
                $this->addUsingAlias(DemandePeer::DELAI_TRAITEMENT_OUVRABLE, $delaiTraitementOuvrable['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delaiTraitementOuvrable['max'])) {
                $this->addUsingAlias(DemandePeer::DELAI_TRAITEMENT_OUVRABLE, $delaiTraitementOuvrable['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::DELAI_TRAITEMENT_OUVRABLE, $delaiTraitementOuvrable, $comparison);
    }

    /**
     * Filter the query on the ACTEUR_EXTERNE column
     *
     * Example usage:
     * <code>
     * $query->filterByActeurExterne('fooValue');   // WHERE ACTEUR_EXTERNE = 'fooValue'
     * $query->filterByActeurExterne('%fooValue%'); // WHERE ACTEUR_EXTERNE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $acteurExterne The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByActeurExterne($acteurExterne = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($acteurExterne)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $acteurExterne)) {
                $acteurExterne = str_replace('*', '%', $acteurExterne);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::ACTEUR_EXTERNE, $acteurExterne, $comparison);
    }

    /**
     * Filter the query on the DELAI_TRAITEMENT column
     *
     * Example usage:
     * <code>
     * $query->filterByDelaiTraitement(1234); // WHERE DELAI_TRAITEMENT = 1234
     * $query->filterByDelaiTraitement(array(12, 34)); // WHERE DELAI_TRAITEMENT IN (12, 34)
     * $query->filterByDelaiTraitement(array('min' => 12)); // WHERE DELAI_TRAITEMENT >= 12
     * $query->filterByDelaiTraitement(array('max' => 12)); // WHERE DELAI_TRAITEMENT <= 12
     * </code>
     *
     * @param     mixed $delaiTraitement The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByDelaiTraitement($delaiTraitement = null, $comparison = null)
    {
        if (is_array($delaiTraitement)) {
            $useMinMax = false;
            if (isset($delaiTraitement['min'])) {
                $this->addUsingAlias(DemandePeer::DELAI_TRAITEMENT, $delaiTraitement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delaiTraitement['max'])) {
                $this->addUsingAlias(DemandePeer::DELAI_TRAITEMENT, $delaiTraitement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::DELAI_TRAITEMENT, $delaiTraitement, $comparison);
    }

    /**
     * Filter the query on the OBJET_MODIFIE column
     *
     * Example usage:
     * <code>
     * $query->filterByObjetModifie('fooValue');   // WHERE OBJET_MODIFIE = 'fooValue'
     * $query->filterByObjetModifie('%fooValue%'); // WHERE OBJET_MODIFIE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $objetModifie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByObjetModifie($objetModifie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($objetModifie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $objetModifie)) {
                $objetModifie = str_replace('*', '%', $objetModifie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::OBJET_MODIFIE, $objetModifie, $comparison);
    }

    /**
     * Filter the query on the CONFIDENTIEL column
     *
     * Example usage:
     * <code>
     * $query->filterByConfidentiel('fooValue');   // WHERE CONFIDENTIEL = 'fooValue'
     * $query->filterByConfidentiel('%fooValue%'); // WHERE CONFIDENTIEL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $confidentiel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByConfidentiel($confidentiel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($confidentiel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $confidentiel)) {
                $confidentiel = str_replace('*', '%', $confidentiel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::CONFIDENTIEL, $confidentiel, $comparison);
    }

    /**
     * Filter the query on the DELAI_COMPLEMENT column
     *
     * Example usage:
     * <code>
     * $query->filterByDelaiComplement(1234); // WHERE DELAI_COMPLEMENT = 1234
     * $query->filterByDelaiComplement(array(12, 34)); // WHERE DELAI_COMPLEMENT IN (12, 34)
     * $query->filterByDelaiComplement(array('min' => 12)); // WHERE DELAI_COMPLEMENT >= 12
     * $query->filterByDelaiComplement(array('max' => 12)); // WHERE DELAI_COMPLEMENT <= 12
     * </code>
     *
     * @param     mixed $delaiComplement The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByDelaiComplement($delaiComplement = null, $comparison = null)
    {
        if (is_array($delaiComplement)) {
            $useMinMax = false;
            if (isset($delaiComplement['min'])) {
                $this->addUsingAlias(DemandePeer::DELAI_COMPLEMENT, $delaiComplement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delaiComplement['max'])) {
                $this->addUsingAlias(DemandePeer::DELAI_COMPLEMENT, $delaiComplement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::DELAI_COMPLEMENT, $delaiComplement, $comparison);
    }

    /**
     * Filter the query on the ERREURS_DETECTES column
     *
     * Example usage:
     * <code>
     * $query->filterByErreursDetectes('fooValue');   // WHERE ERREURS_DETECTES = 'fooValue'
     * $query->filterByErreursDetectes('%fooValue%'); // WHERE ERREURS_DETECTES LIKE '%fooValue%'
     * </code>
     *
     * @param     string $erreursDetectes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByErreursDetectes($erreursDetectes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($erreursDetectes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $erreursDetectes)) {
                $erreursDetectes = str_replace('*', '%', $erreursDetectes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DemandePeer::ERREURS_DETECTES, $erreursDetectes, $comparison);
    }

    /**
     * Filter the query on the ID_DEMANDE_ORIGINE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDemandeOrigine(1234); // WHERE ID_DEMANDE_ORIGINE = 1234
     * $query->filterByIdDemandeOrigine(array(12, 34)); // WHERE ID_DEMANDE_ORIGINE IN (12, 34)
     * $query->filterByIdDemandeOrigine(array('min' => 12)); // WHERE ID_DEMANDE_ORIGINE >= 12
     * $query->filterByIdDemandeOrigine(array('max' => 12)); // WHERE ID_DEMANDE_ORIGINE <= 12
     * </code>
     *
     * @param     mixed $idDemandeOrigine The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function filterByIdDemandeOrigine($idDemandeOrigine = null, $comparison = null)
    {
        if (is_array($idDemandeOrigine)) {
            $useMinMax = false;
            if (isset($idDemandeOrigine['min'])) {
                $this->addUsingAlias(DemandePeer::ID_DEMANDE_ORIGINE, $idDemandeOrigine['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDemandeOrigine['max'])) {
                $this->addUsingAlias(DemandePeer::ID_DEMANDE_ORIGINE, $idDemandeOrigine['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DemandePeer::ID_DEMANDE_ORIGINE, $idDemandeOrigine, $comparison);
    }

    /**
     * Filter the query by a related THistoriqueConsultation object
     *
     * @param   THistoriqueConsultation|PropelObjectCollection $tHistoriqueConsultation  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 DemandeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTHistoriqueConsultation($tHistoriqueConsultation, $comparison = null)
    {
        if ($tHistoriqueConsultation instanceof THistoriqueConsultation) {
            return $this
                ->addUsingAlias(DemandePeer::ID, $tHistoriqueConsultation->getIdDemande(), $comparison);
        } elseif ($tHistoriqueConsultation instanceof PropelObjectCollection) {
            return $this
                ->useTHistoriqueConsultationQuery()
                ->filterByPrimaryKeys($tHistoriqueConsultation->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTHistoriqueConsultation() only accepts arguments of type THistoriqueConsultation or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the THistoriqueConsultation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function joinTHistoriqueConsultation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('THistoriqueConsultation');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'THistoriqueConsultation');
        }

        return $this;
    }

    /**
     * Use the THistoriqueConsultation relation THistoriqueConsultation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   THistoriqueConsultationQuery A secondary query class using the current class as primary query
     */
    public function useTHistoriqueConsultationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTHistoriqueConsultation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'THistoriqueConsultation', 'THistoriqueConsultationQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Demande $demande Object to remove from the list of results
     *
     * @return DemandeQuery The current query, for fluid interface
     */
    public function prune($demande = null)
    {
        if ($demande) {
            $this->addUsingAlias(DemandePeer::ID, $demande->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
