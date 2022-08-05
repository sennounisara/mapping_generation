<?php


/**
 * Base class that represents a query for the 'Service' table.
 *
 * 
 *
 * @method CommonServiceQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonServiceQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonServiceQuery orderByTypeService($order = Criteria::ASC) Order by the type_service column
 * @method CommonServiceQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonServiceQuery orderBySigle($order = Criteria::ASC) Order by the sigle column
 * @method CommonServiceQuery orderByAdresse($order = Criteria::ASC) Order by the adresse column
 * @method CommonServiceQuery orderByAdresseSuite($order = Criteria::ASC) Order by the adresse_suite column
 * @method CommonServiceQuery orderByCp($order = Criteria::ASC) Order by the cp column
 * @method CommonServiceQuery orderByVille($order = Criteria::ASC) Order by the ville column
 * @method CommonServiceQuery orderByTelephone($order = Criteria::ASC) Order by the telephone column
 * @method CommonServiceQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method CommonServiceQuery orderByMail($order = Criteria::ASC) Order by the mail column
 * @method CommonServiceQuery orderByPays($order = Criteria::ASC) Order by the pays column
 * @method CommonServiceQuery orderByIdInitial($order = Criteria::ASC) Order by the id_initial column
 * @method CommonServiceQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonServiceQuery orderByDateModification($order = Criteria::ASC) Order by the date_modification column
 * @method CommonServiceQuery orderBySiren($order = Criteria::ASC) Order by the siren column
 * @method CommonServiceQuery orderByComplement($order = Criteria::ASC) Order by the complement column
 * @method CommonServiceQuery orderByLibelleAr($order = Criteria::ASC) Order by the libelle_ar column
 * @method CommonServiceQuery orderByAdresseAr($order = Criteria::ASC) Order by the adresse_ar column
 * @method CommonServiceQuery orderByAdresseSuiteAr($order = Criteria::ASC) Order by the adresse_suite_ar column
 * @method CommonServiceQuery orderByVilleAr($order = Criteria::ASC) Order by the ville_ar column
 * @method CommonServiceQuery orderByPaysAr($order = Criteria::ASC) Order by the pays_ar column
 * @method CommonServiceQuery orderByLibelleFr($order = Criteria::ASC) Order by the libelle_fr column
 * @method CommonServiceQuery orderByAdresseFr($order = Criteria::ASC) Order by the adresse_fr column
 * @method CommonServiceQuery orderByAdresseSuiteFr($order = Criteria::ASC) Order by the adresse_suite_fr column
 * @method CommonServiceQuery orderByVilleFr($order = Criteria::ASC) Order by the ville_fr column
 * @method CommonServiceQuery orderByPaysFr($order = Criteria::ASC) Order by the pays_fr column
 * @method CommonServiceQuery orderByLibelleEs($order = Criteria::ASC) Order by the libelle_es column
 * @method CommonServiceQuery orderByAdresseEs($order = Criteria::ASC) Order by the adresse_es column
 * @method CommonServiceQuery orderByAdresseSuiteEs($order = Criteria::ASC) Order by the adresse_suite_es column
 * @method CommonServiceQuery orderByVilleEs($order = Criteria::ASC) Order by the ville_es column
 * @method CommonServiceQuery orderByPaysEs($order = Criteria::ASC) Order by the pays_es column
 * @method CommonServiceQuery orderByLibelleEn($order = Criteria::ASC) Order by the libelle_en column
 * @method CommonServiceQuery orderByAdresseEn($order = Criteria::ASC) Order by the adresse_en column
 * @method CommonServiceQuery orderByAdresseSuiteEn($order = Criteria::ASC) Order by the adresse_suite_en column
 * @method CommonServiceQuery orderByVilleEn($order = Criteria::ASC) Order by the ville_en column
 * @method CommonServiceQuery orderByPaysEn($order = Criteria::ASC) Order by the pays_en column
 * @method CommonServiceQuery orderByLibelleSu($order = Criteria::ASC) Order by the libelle_su column
 * @method CommonServiceQuery orderByAdresseSu($order = Criteria::ASC) Order by the adresse_su column
 * @method CommonServiceQuery orderByAdresseSuiteSu($order = Criteria::ASC) Order by the adresse_suite_su column
 * @method CommonServiceQuery orderByVilleSu($order = Criteria::ASC) Order by the ville_su column
 * @method CommonServiceQuery orderByPaysSu($order = Criteria::ASC) Order by the pays_su column
 * @method CommonServiceQuery orderByLibelleDu($order = Criteria::ASC) Order by the libelle_du column
 * @method CommonServiceQuery orderByAdresseDu($order = Criteria::ASC) Order by the adresse_du column
 * @method CommonServiceQuery orderByAdresseSuiteDu($order = Criteria::ASC) Order by the adresse_suite_du column
 * @method CommonServiceQuery orderByVilleDu($order = Criteria::ASC) Order by the ville_du column
 * @method CommonServiceQuery orderByPaysDu($order = Criteria::ASC) Order by the pays_du column
 * @method CommonServiceQuery orderByLibelleCz($order = Criteria::ASC) Order by the libelle_cz column
 * @method CommonServiceQuery orderByAdresseCz($order = Criteria::ASC) Order by the adresse_cz column
 * @method CommonServiceQuery orderByAdresseSuiteCz($order = Criteria::ASC) Order by the adresse_suite_cz column
 * @method CommonServiceQuery orderByVilleCz($order = Criteria::ASC) Order by the ville_cz column
 * @method CommonServiceQuery orderByPaysCz($order = Criteria::ASC) Order by the pays_cz column
 * @method CommonServiceQuery orderByLibelleIt($order = Criteria::ASC) Order by the libelle_it column
 * @method CommonServiceQuery orderByAdresseIt($order = Criteria::ASC) Order by the adresse_it column
 * @method CommonServiceQuery orderByAdresseSuiteIt($order = Criteria::ASC) Order by the adresse_suite_it column
 * @method CommonServiceQuery orderByVilleIt($order = Criteria::ASC) Order by the ville_it column
 * @method CommonServiceQuery orderByPaysIt($order = Criteria::ASC) Order by the pays_it column
 * @method CommonServiceQuery orderByCheminComplet($order = Criteria::ASC) Order by the chemin_complet column
 * @method CommonServiceQuery orderByCheminCompletFr($order = Criteria::ASC) Order by the chemin_complet_fr column
 * @method CommonServiceQuery orderByCheminCompletEn($order = Criteria::ASC) Order by the chemin_complet_en column
 * @method CommonServiceQuery orderByCheminCompletEs($order = Criteria::ASC) Order by the chemin_complet_es column
 * @method CommonServiceQuery orderByCheminCompletSu($order = Criteria::ASC) Order by the chemin_complet_su column
 * @method CommonServiceQuery orderByCheminCompletDu($order = Criteria::ASC) Order by the chemin_complet_du column
 * @method CommonServiceQuery orderByCheminCompletCz($order = Criteria::ASC) Order by the chemin_complet_cz column
 * @method CommonServiceQuery orderByCheminCompletAr($order = Criteria::ASC) Order by the chemin_complet_ar column
 * @method CommonServiceQuery orderByCheminCompletIt($order = Criteria::ASC) Order by the chemin_complet_it column
 * @method CommonServiceQuery orderByNomServiceArchiveur($order = Criteria::ASC) Order by the nom_service_archiveur column
 * @method CommonServiceQuery orderByIdentifiantServiceArchiveur($order = Criteria::ASC) Order by the identifiant_service_archiveur column
 * @method CommonServiceQuery orderByAffichageService($order = Criteria::ASC) Order by the affichage_service column
 * @method CommonServiceQuery orderByActivationFuseauHoraire($order = Criteria::ASC) Order by the activation_fuseau_horaire column
 * @method CommonServiceQuery orderByDecalageHoraire($order = Criteria::ASC) Order by the decalage_horaire column
 * @method CommonServiceQuery orderByLieuResidence($order = Criteria::ASC) Order by the lieu_residence column
 * @method CommonServiceQuery orderByAlerte($order = Criteria::ASC) Order by the alerte column
 *
 * @method CommonServiceQuery groupById() Group by the id column
 * @method CommonServiceQuery groupByOrganisme() Group by the organisme column
 * @method CommonServiceQuery groupByTypeService() Group by the type_service column
 * @method CommonServiceQuery groupByLibelle() Group by the libelle column
 * @method CommonServiceQuery groupBySigle() Group by the sigle column
 * @method CommonServiceQuery groupByAdresse() Group by the adresse column
 * @method CommonServiceQuery groupByAdresseSuite() Group by the adresse_suite column
 * @method CommonServiceQuery groupByCp() Group by the cp column
 * @method CommonServiceQuery groupByVille() Group by the ville column
 * @method CommonServiceQuery groupByTelephone() Group by the telephone column
 * @method CommonServiceQuery groupByFax() Group by the fax column
 * @method CommonServiceQuery groupByMail() Group by the mail column
 * @method CommonServiceQuery groupByPays() Group by the pays column
 * @method CommonServiceQuery groupByIdInitial() Group by the id_initial column
 * @method CommonServiceQuery groupByDateCreation() Group by the date_creation column
 * @method CommonServiceQuery groupByDateModification() Group by the date_modification column
 * @method CommonServiceQuery groupBySiren() Group by the siren column
 * @method CommonServiceQuery groupByComplement() Group by the complement column
 * @method CommonServiceQuery groupByLibelleAr() Group by the libelle_ar column
 * @method CommonServiceQuery groupByAdresseAr() Group by the adresse_ar column
 * @method CommonServiceQuery groupByAdresseSuiteAr() Group by the adresse_suite_ar column
 * @method CommonServiceQuery groupByVilleAr() Group by the ville_ar column
 * @method CommonServiceQuery groupByPaysAr() Group by the pays_ar column
 * @method CommonServiceQuery groupByLibelleFr() Group by the libelle_fr column
 * @method CommonServiceQuery groupByAdresseFr() Group by the adresse_fr column
 * @method CommonServiceQuery groupByAdresseSuiteFr() Group by the adresse_suite_fr column
 * @method CommonServiceQuery groupByVilleFr() Group by the ville_fr column
 * @method CommonServiceQuery groupByPaysFr() Group by the pays_fr column
 * @method CommonServiceQuery groupByLibelleEs() Group by the libelle_es column
 * @method CommonServiceQuery groupByAdresseEs() Group by the adresse_es column
 * @method CommonServiceQuery groupByAdresseSuiteEs() Group by the adresse_suite_es column
 * @method CommonServiceQuery groupByVilleEs() Group by the ville_es column
 * @method CommonServiceQuery groupByPaysEs() Group by the pays_es column
 * @method CommonServiceQuery groupByLibelleEn() Group by the libelle_en column
 * @method CommonServiceQuery groupByAdresseEn() Group by the adresse_en column
 * @method CommonServiceQuery groupByAdresseSuiteEn() Group by the adresse_suite_en column
 * @method CommonServiceQuery groupByVilleEn() Group by the ville_en column
 * @method CommonServiceQuery groupByPaysEn() Group by the pays_en column
 * @method CommonServiceQuery groupByLibelleSu() Group by the libelle_su column
 * @method CommonServiceQuery groupByAdresseSu() Group by the adresse_su column
 * @method CommonServiceQuery groupByAdresseSuiteSu() Group by the adresse_suite_su column
 * @method CommonServiceQuery groupByVilleSu() Group by the ville_su column
 * @method CommonServiceQuery groupByPaysSu() Group by the pays_su column
 * @method CommonServiceQuery groupByLibelleDu() Group by the libelle_du column
 * @method CommonServiceQuery groupByAdresseDu() Group by the adresse_du column
 * @method CommonServiceQuery groupByAdresseSuiteDu() Group by the adresse_suite_du column
 * @method CommonServiceQuery groupByVilleDu() Group by the ville_du column
 * @method CommonServiceQuery groupByPaysDu() Group by the pays_du column
 * @method CommonServiceQuery groupByLibelleCz() Group by the libelle_cz column
 * @method CommonServiceQuery groupByAdresseCz() Group by the adresse_cz column
 * @method CommonServiceQuery groupByAdresseSuiteCz() Group by the adresse_suite_cz column
 * @method CommonServiceQuery groupByVilleCz() Group by the ville_cz column
 * @method CommonServiceQuery groupByPaysCz() Group by the pays_cz column
 * @method CommonServiceQuery groupByLibelleIt() Group by the libelle_it column
 * @method CommonServiceQuery groupByAdresseIt() Group by the adresse_it column
 * @method CommonServiceQuery groupByAdresseSuiteIt() Group by the adresse_suite_it column
 * @method CommonServiceQuery groupByVilleIt() Group by the ville_it column
 * @method CommonServiceQuery groupByPaysIt() Group by the pays_it column
 * @method CommonServiceQuery groupByCheminComplet() Group by the chemin_complet column
 * @method CommonServiceQuery groupByCheminCompletFr() Group by the chemin_complet_fr column
 * @method CommonServiceQuery groupByCheminCompletEn() Group by the chemin_complet_en column
 * @method CommonServiceQuery groupByCheminCompletEs() Group by the chemin_complet_es column
 * @method CommonServiceQuery groupByCheminCompletSu() Group by the chemin_complet_su column
 * @method CommonServiceQuery groupByCheminCompletDu() Group by the chemin_complet_du column
 * @method CommonServiceQuery groupByCheminCompletCz() Group by the chemin_complet_cz column
 * @method CommonServiceQuery groupByCheminCompletAr() Group by the chemin_complet_ar column
 * @method CommonServiceQuery groupByCheminCompletIt() Group by the chemin_complet_it column
 * @method CommonServiceQuery groupByNomServiceArchiveur() Group by the nom_service_archiveur column
 * @method CommonServiceQuery groupByIdentifiantServiceArchiveur() Group by the identifiant_service_archiveur column
 * @method CommonServiceQuery groupByAffichageService() Group by the affichage_service column
 * @method CommonServiceQuery groupByActivationFuseauHoraire() Group by the activation_fuseau_horaire column
 * @method CommonServiceQuery groupByDecalageHoraire() Group by the decalage_horaire column
 * @method CommonServiceQuery groupByLieuResidence() Group by the lieu_residence column
 * @method CommonServiceQuery groupByAlerte() Group by the alerte column
 *
 * @method CommonServiceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonServiceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonServiceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonService findOne(PropelPDO $con = null) Return the first CommonService matching the query
 * @method CommonService findOneOrCreate(PropelPDO $con = null) Return the first CommonService matching the query, or a new CommonService object populated from the query conditions when no match is found
 *
 * @method CommonService findOneById(int $id) Return the first CommonService filtered by the id column
 * @method CommonService findOneByOrganisme(string $organisme) Return the first CommonService filtered by the organisme column
 * @method CommonService findOneByTypeService(string $type_service) Return the first CommonService filtered by the type_service column
 * @method CommonService findOneByLibelle(string $libelle) Return the first CommonService filtered by the libelle column
 * @method CommonService findOneBySigle(string $sigle) Return the first CommonService filtered by the sigle column
 * @method CommonService findOneByAdresse(string $adresse) Return the first CommonService filtered by the adresse column
 * @method CommonService findOneByAdresseSuite(string $adresse_suite) Return the first CommonService filtered by the adresse_suite column
 * @method CommonService findOneByCp(string $cp) Return the first CommonService filtered by the cp column
 * @method CommonService findOneByVille(string $ville) Return the first CommonService filtered by the ville column
 * @method CommonService findOneByTelephone(string $telephone) Return the first CommonService filtered by the telephone column
 * @method CommonService findOneByFax(string $fax) Return the first CommonService filtered by the fax column
 * @method CommonService findOneByMail(string $mail) Return the first CommonService filtered by the mail column
 * @method CommonService findOneByPays(string $pays) Return the first CommonService filtered by the pays column
 * @method CommonService findOneByIdInitial(int $id_initial) Return the first CommonService filtered by the id_initial column
 * @method CommonService findOneByDateCreation(string $date_creation) Return the first CommonService filtered by the date_creation column
 * @method CommonService findOneByDateModification(string $date_modification) Return the first CommonService filtered by the date_modification column
 * @method CommonService findOneBySiren(string $siren) Return the first CommonService filtered by the siren column
 * @method CommonService findOneByComplement(string $complement) Return the first CommonService filtered by the complement column
 * @method CommonService findOneByLibelleAr(string $libelle_ar) Return the first CommonService filtered by the libelle_ar column
 * @method CommonService findOneByAdresseAr(string $adresse_ar) Return the first CommonService filtered by the adresse_ar column
 * @method CommonService findOneByAdresseSuiteAr(string $adresse_suite_ar) Return the first CommonService filtered by the adresse_suite_ar column
 * @method CommonService findOneByVilleAr(string $ville_ar) Return the first CommonService filtered by the ville_ar column
 * @method CommonService findOneByPaysAr(string $pays_ar) Return the first CommonService filtered by the pays_ar column
 * @method CommonService findOneByLibelleFr(string $libelle_fr) Return the first CommonService filtered by the libelle_fr column
 * @method CommonService findOneByAdresseFr(string $adresse_fr) Return the first CommonService filtered by the adresse_fr column
 * @method CommonService findOneByAdresseSuiteFr(string $adresse_suite_fr) Return the first CommonService filtered by the adresse_suite_fr column
 * @method CommonService findOneByVilleFr(string $ville_fr) Return the first CommonService filtered by the ville_fr column
 * @method CommonService findOneByPaysFr(string $pays_fr) Return the first CommonService filtered by the pays_fr column
 * @method CommonService findOneByLibelleEs(string $libelle_es) Return the first CommonService filtered by the libelle_es column
 * @method CommonService findOneByAdresseEs(string $adresse_es) Return the first CommonService filtered by the adresse_es column
 * @method CommonService findOneByAdresseSuiteEs(string $adresse_suite_es) Return the first CommonService filtered by the adresse_suite_es column
 * @method CommonService findOneByVilleEs(string $ville_es) Return the first CommonService filtered by the ville_es column
 * @method CommonService findOneByPaysEs(string $pays_es) Return the first CommonService filtered by the pays_es column
 * @method CommonService findOneByLibelleEn(string $libelle_en) Return the first CommonService filtered by the libelle_en column
 * @method CommonService findOneByAdresseEn(string $adresse_en) Return the first CommonService filtered by the adresse_en column
 * @method CommonService findOneByAdresseSuiteEn(string $adresse_suite_en) Return the first CommonService filtered by the adresse_suite_en column
 * @method CommonService findOneByVilleEn(string $ville_en) Return the first CommonService filtered by the ville_en column
 * @method CommonService findOneByPaysEn(string $pays_en) Return the first CommonService filtered by the pays_en column
 * @method CommonService findOneByLibelleSu(string $libelle_su) Return the first CommonService filtered by the libelle_su column
 * @method CommonService findOneByAdresseSu(string $adresse_su) Return the first CommonService filtered by the adresse_su column
 * @method CommonService findOneByAdresseSuiteSu(string $adresse_suite_su) Return the first CommonService filtered by the adresse_suite_su column
 * @method CommonService findOneByVilleSu(string $ville_su) Return the first CommonService filtered by the ville_su column
 * @method CommonService findOneByPaysSu(string $pays_su) Return the first CommonService filtered by the pays_su column
 * @method CommonService findOneByLibelleDu(string $libelle_du) Return the first CommonService filtered by the libelle_du column
 * @method CommonService findOneByAdresseDu(string $adresse_du) Return the first CommonService filtered by the adresse_du column
 * @method CommonService findOneByAdresseSuiteDu(string $adresse_suite_du) Return the first CommonService filtered by the adresse_suite_du column
 * @method CommonService findOneByVilleDu(string $ville_du) Return the first CommonService filtered by the ville_du column
 * @method CommonService findOneByPaysDu(string $pays_du) Return the first CommonService filtered by the pays_du column
 * @method CommonService findOneByLibelleCz(string $libelle_cz) Return the first CommonService filtered by the libelle_cz column
 * @method CommonService findOneByAdresseCz(string $adresse_cz) Return the first CommonService filtered by the adresse_cz column
 * @method CommonService findOneByAdresseSuiteCz(string $adresse_suite_cz) Return the first CommonService filtered by the adresse_suite_cz column
 * @method CommonService findOneByVilleCz(string $ville_cz) Return the first CommonService filtered by the ville_cz column
 * @method CommonService findOneByPaysCz(string $pays_cz) Return the first CommonService filtered by the pays_cz column
 * @method CommonService findOneByLibelleIt(string $libelle_it) Return the first CommonService filtered by the libelle_it column
 * @method CommonService findOneByAdresseIt(string $adresse_it) Return the first CommonService filtered by the adresse_it column
 * @method CommonService findOneByAdresseSuiteIt(string $adresse_suite_it) Return the first CommonService filtered by the adresse_suite_it column
 * @method CommonService findOneByVilleIt(string $ville_it) Return the first CommonService filtered by the ville_it column
 * @method CommonService findOneByPaysIt(string $pays_it) Return the first CommonService filtered by the pays_it column
 * @method CommonService findOneByCheminComplet(string $chemin_complet) Return the first CommonService filtered by the chemin_complet column
 * @method CommonService findOneByCheminCompletFr(string $chemin_complet_fr) Return the first CommonService filtered by the chemin_complet_fr column
 * @method CommonService findOneByCheminCompletEn(string $chemin_complet_en) Return the first CommonService filtered by the chemin_complet_en column
 * @method CommonService findOneByCheminCompletEs(string $chemin_complet_es) Return the first CommonService filtered by the chemin_complet_es column
 * @method CommonService findOneByCheminCompletSu(string $chemin_complet_su) Return the first CommonService filtered by the chemin_complet_su column
 * @method CommonService findOneByCheminCompletDu(string $chemin_complet_du) Return the first CommonService filtered by the chemin_complet_du column
 * @method CommonService findOneByCheminCompletCz(string $chemin_complet_cz) Return the first CommonService filtered by the chemin_complet_cz column
 * @method CommonService findOneByCheminCompletAr(string $chemin_complet_ar) Return the first CommonService filtered by the chemin_complet_ar column
 * @method CommonService findOneByCheminCompletIt(string $chemin_complet_it) Return the first CommonService filtered by the chemin_complet_it column
 * @method CommonService findOneByNomServiceArchiveur(string $nom_service_archiveur) Return the first CommonService filtered by the nom_service_archiveur column
 * @method CommonService findOneByIdentifiantServiceArchiveur(string $identifiant_service_archiveur) Return the first CommonService filtered by the identifiant_service_archiveur column
 * @method CommonService findOneByAffichageService(string $affichage_service) Return the first CommonService filtered by the affichage_service column
 * @method CommonService findOneByActivationFuseauHoraire(string $activation_fuseau_horaire) Return the first CommonService filtered by the activation_fuseau_horaire column
 * @method CommonService findOneByDecalageHoraire(string $decalage_horaire) Return the first CommonService filtered by the decalage_horaire column
 * @method CommonService findOneByLieuResidence(string $lieu_residence) Return the first CommonService filtered by the lieu_residence column
 * @method CommonService findOneByAlerte(string $alerte) Return the first CommonService filtered by the alerte column
 *
 * @method array findById(int $id) Return CommonService objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonService objects filtered by the organisme column
 * @method array findByTypeService(string $type_service) Return CommonService objects filtered by the type_service column
 * @method array findByLibelle(string $libelle) Return CommonService objects filtered by the libelle column
 * @method array findBySigle(string $sigle) Return CommonService objects filtered by the sigle column
 * @method array findByAdresse(string $adresse) Return CommonService objects filtered by the adresse column
 * @method array findByAdresseSuite(string $adresse_suite) Return CommonService objects filtered by the adresse_suite column
 * @method array findByCp(string $cp) Return CommonService objects filtered by the cp column
 * @method array findByVille(string $ville) Return CommonService objects filtered by the ville column
 * @method array findByTelephone(string $telephone) Return CommonService objects filtered by the telephone column
 * @method array findByFax(string $fax) Return CommonService objects filtered by the fax column
 * @method array findByMail(string $mail) Return CommonService objects filtered by the mail column
 * @method array findByPays(string $pays) Return CommonService objects filtered by the pays column
 * @method array findByIdInitial(int $id_initial) Return CommonService objects filtered by the id_initial column
 * @method array findByDateCreation(string $date_creation) Return CommonService objects filtered by the date_creation column
 * @method array findByDateModification(string $date_modification) Return CommonService objects filtered by the date_modification column
 * @method array findBySiren(string $siren) Return CommonService objects filtered by the siren column
 * @method array findByComplement(string $complement) Return CommonService objects filtered by the complement column
 * @method array findByLibelleAr(string $libelle_ar) Return CommonService objects filtered by the libelle_ar column
 * @method array findByAdresseAr(string $adresse_ar) Return CommonService objects filtered by the adresse_ar column
 * @method array findByAdresseSuiteAr(string $adresse_suite_ar) Return CommonService objects filtered by the adresse_suite_ar column
 * @method array findByVilleAr(string $ville_ar) Return CommonService objects filtered by the ville_ar column
 * @method array findByPaysAr(string $pays_ar) Return CommonService objects filtered by the pays_ar column
 * @method array findByLibelleFr(string $libelle_fr) Return CommonService objects filtered by the libelle_fr column
 * @method array findByAdresseFr(string $adresse_fr) Return CommonService objects filtered by the adresse_fr column
 * @method array findByAdresseSuiteFr(string $adresse_suite_fr) Return CommonService objects filtered by the adresse_suite_fr column
 * @method array findByVilleFr(string $ville_fr) Return CommonService objects filtered by the ville_fr column
 * @method array findByPaysFr(string $pays_fr) Return CommonService objects filtered by the pays_fr column
 * @method array findByLibelleEs(string $libelle_es) Return CommonService objects filtered by the libelle_es column
 * @method array findByAdresseEs(string $adresse_es) Return CommonService objects filtered by the adresse_es column
 * @method array findByAdresseSuiteEs(string $adresse_suite_es) Return CommonService objects filtered by the adresse_suite_es column
 * @method array findByVilleEs(string $ville_es) Return CommonService objects filtered by the ville_es column
 * @method array findByPaysEs(string $pays_es) Return CommonService objects filtered by the pays_es column
 * @method array findByLibelleEn(string $libelle_en) Return CommonService objects filtered by the libelle_en column
 * @method array findByAdresseEn(string $adresse_en) Return CommonService objects filtered by the adresse_en column
 * @method array findByAdresseSuiteEn(string $adresse_suite_en) Return CommonService objects filtered by the adresse_suite_en column
 * @method array findByVilleEn(string $ville_en) Return CommonService objects filtered by the ville_en column
 * @method array findByPaysEn(string $pays_en) Return CommonService objects filtered by the pays_en column
 * @method array findByLibelleSu(string $libelle_su) Return CommonService objects filtered by the libelle_su column
 * @method array findByAdresseSu(string $adresse_su) Return CommonService objects filtered by the adresse_su column
 * @method array findByAdresseSuiteSu(string $adresse_suite_su) Return CommonService objects filtered by the adresse_suite_su column
 * @method array findByVilleSu(string $ville_su) Return CommonService objects filtered by the ville_su column
 * @method array findByPaysSu(string $pays_su) Return CommonService objects filtered by the pays_su column
 * @method array findByLibelleDu(string $libelle_du) Return CommonService objects filtered by the libelle_du column
 * @method array findByAdresseDu(string $adresse_du) Return CommonService objects filtered by the adresse_du column
 * @method array findByAdresseSuiteDu(string $adresse_suite_du) Return CommonService objects filtered by the adresse_suite_du column
 * @method array findByVilleDu(string $ville_du) Return CommonService objects filtered by the ville_du column
 * @method array findByPaysDu(string $pays_du) Return CommonService objects filtered by the pays_du column
 * @method array findByLibelleCz(string $libelle_cz) Return CommonService objects filtered by the libelle_cz column
 * @method array findByAdresseCz(string $adresse_cz) Return CommonService objects filtered by the adresse_cz column
 * @method array findByAdresseSuiteCz(string $adresse_suite_cz) Return CommonService objects filtered by the adresse_suite_cz column
 * @method array findByVilleCz(string $ville_cz) Return CommonService objects filtered by the ville_cz column
 * @method array findByPaysCz(string $pays_cz) Return CommonService objects filtered by the pays_cz column
 * @method array findByLibelleIt(string $libelle_it) Return CommonService objects filtered by the libelle_it column
 * @method array findByAdresseIt(string $adresse_it) Return CommonService objects filtered by the adresse_it column
 * @method array findByAdresseSuiteIt(string $adresse_suite_it) Return CommonService objects filtered by the adresse_suite_it column
 * @method array findByVilleIt(string $ville_it) Return CommonService objects filtered by the ville_it column
 * @method array findByPaysIt(string $pays_it) Return CommonService objects filtered by the pays_it column
 * @method array findByCheminComplet(string $chemin_complet) Return CommonService objects filtered by the chemin_complet column
 * @method array findByCheminCompletFr(string $chemin_complet_fr) Return CommonService objects filtered by the chemin_complet_fr column
 * @method array findByCheminCompletEn(string $chemin_complet_en) Return CommonService objects filtered by the chemin_complet_en column
 * @method array findByCheminCompletEs(string $chemin_complet_es) Return CommonService objects filtered by the chemin_complet_es column
 * @method array findByCheminCompletSu(string $chemin_complet_su) Return CommonService objects filtered by the chemin_complet_su column
 * @method array findByCheminCompletDu(string $chemin_complet_du) Return CommonService objects filtered by the chemin_complet_du column
 * @method array findByCheminCompletCz(string $chemin_complet_cz) Return CommonService objects filtered by the chemin_complet_cz column
 * @method array findByCheminCompletAr(string $chemin_complet_ar) Return CommonService objects filtered by the chemin_complet_ar column
 * @method array findByCheminCompletIt(string $chemin_complet_it) Return CommonService objects filtered by the chemin_complet_it column
 * @method array findByNomServiceArchiveur(string $nom_service_archiveur) Return CommonService objects filtered by the nom_service_archiveur column
 * @method array findByIdentifiantServiceArchiveur(string $identifiant_service_archiveur) Return CommonService objects filtered by the identifiant_service_archiveur column
 * @method array findByAffichageService(string $affichage_service) Return CommonService objects filtered by the affichage_service column
 * @method array findByActivationFuseauHoraire(string $activation_fuseau_horaire) Return CommonService objects filtered by the activation_fuseau_horaire column
 * @method array findByDecalageHoraire(string $decalage_horaire) Return CommonService objects filtered by the decalage_horaire column
 * @method array findByLieuResidence(string $lieu_residence) Return CommonService objects filtered by the lieu_residence column
 * @method array findByAlerte(string $alerte) Return CommonService objects filtered by the alerte column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonServiceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonServiceQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonService', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonServiceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonServiceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonServiceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonServiceQuery) {
            return $criteria;
        }
        $query = new CommonServiceQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$id, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonService|CommonService[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonServicePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonService A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `type_service`, `libelle`, `sigle`, `adresse`, `adresse_suite`, `cp`, `ville`, `telephone`, `fax`, `mail`, `pays`, `id_initial`, `date_creation`, `date_modification`, `siren`, `complement`, `libelle_ar`, `adresse_ar`, `adresse_suite_ar`, `ville_ar`, `pays_ar`, `libelle_fr`, `adresse_fr`, `adresse_suite_fr`, `ville_fr`, `pays_fr`, `libelle_es`, `adresse_es`, `adresse_suite_es`, `ville_es`, `pays_es`, `libelle_en`, `adresse_en`, `adresse_suite_en`, `ville_en`, `pays_en`, `libelle_su`, `adresse_su`, `adresse_suite_su`, `ville_su`, `pays_su`, `libelle_du`, `adresse_du`, `adresse_suite_du`, `ville_du`, `pays_du`, `libelle_cz`, `adresse_cz`, `adresse_suite_cz`, `ville_cz`, `pays_cz`, `libelle_it`, `adresse_it`, `adresse_suite_it`, `ville_it`, `pays_it`, `chemin_complet`, `chemin_complet_fr`, `chemin_complet_en`, `chemin_complet_es`, `chemin_complet_su`, `chemin_complet_du`, `chemin_complet_cz`, `chemin_complet_ar`, `chemin_complet_it`, `nom_service_archiveur`, `identifiant_service_archiveur`, `affichage_service`, `activation_fuseau_horaire`, `decalage_horaire`, `lieu_residence`, `alerte` FROM `Service` WHERE `id` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonService();
            $obj->hydrate($row);
            CommonServicePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonService|CommonService[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonService[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonServicePeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonServicePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonServicePeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonServicePeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonServicePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonServicePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the organisme column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisme('fooValue');   // WHERE organisme = 'fooValue'
     * $query->filterByOrganisme('%fooValue%'); // WHERE organisme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByOrganisme($organisme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisme)) {
                $organisme = str_replace('*', '%', $organisme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the type_service column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeService('fooValue');   // WHERE type_service = 'fooValue'
     * $query->filterByTypeService('%fooValue%'); // WHERE type_service LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeService The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByTypeService($typeService = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeService)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeService)) {
                $typeService = str_replace('*', '%', $typeService);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::TYPE_SERVICE, $typeService, $comparison);
    }

    /**
     * Filter the query on the libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelle('fooValue');   // WHERE libelle = 'fooValue'
     * $query->filterByLibelle('%fooValue%'); // WHERE libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByLibelle($libelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelle)) {
                $libelle = str_replace('*', '%', $libelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the sigle column
     *
     * Example usage:
     * <code>
     * $query->filterBySigle('fooValue');   // WHERE sigle = 'fooValue'
     * $query->filterBySigle('%fooValue%'); // WHERE sigle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sigle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterBySigle($sigle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sigle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sigle)) {
                $sigle = str_replace('*', '%', $sigle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::SIGLE, $sigle, $comparison);
    }

    /**
     * Filter the query on the adresse column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse('fooValue');   // WHERE adresse = 'fooValue'
     * $query->filterByAdresse('%fooValue%'); // WHERE adresse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByAdresse($adresse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresse)) {
                $adresse = str_replace('*', '%', $adresse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::ADRESSE, $adresse, $comparison);
    }

    /**
     * Filter the query on the adresse_suite column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseSuite('fooValue');   // WHERE adresse_suite = 'fooValue'
     * $query->filterByAdresseSuite('%fooValue%'); // WHERE adresse_suite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseSuite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByAdresseSuite($adresseSuite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseSuite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseSuite)) {
                $adresseSuite = str_replace('*', '%', $adresseSuite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::ADRESSE_SUITE, $adresseSuite, $comparison);
    }

    /**
     * Filter the query on the cp column
     *
     * Example usage:
     * <code>
     * $query->filterByCp('fooValue');   // WHERE cp = 'fooValue'
     * $query->filterByCp('%fooValue%'); // WHERE cp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByCp($cp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cp)) {
                $cp = str_replace('*', '%', $cp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::CP, $cp, $comparison);
    }

    /**
     * Filter the query on the ville column
     *
     * Example usage:
     * <code>
     * $query->filterByVille('fooValue');   // WHERE ville = 'fooValue'
     * $query->filterByVille('%fooValue%'); // WHERE ville LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ville The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByVille($ville = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ville)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ville)) {
                $ville = str_replace('*', '%', $ville);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::VILLE, $ville, $comparison);
    }

    /**
     * Filter the query on the telephone column
     *
     * Example usage:
     * <code>
     * $query->filterByTelephone('fooValue');   // WHERE telephone = 'fooValue'
     * $query->filterByTelephone('%fooValue%'); // WHERE telephone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telephone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByTelephone($telephone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telephone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telephone)) {
                $telephone = str_replace('*', '%', $telephone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::TELEPHONE, $telephone, $comparison);
    }

    /**
     * Filter the query on the fax column
     *
     * Example usage:
     * <code>
     * $query->filterByFax('fooValue');   // WHERE fax = 'fooValue'
     * $query->filterByFax('%fooValue%'); // WHERE fax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByFax($fax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fax)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fax)) {
                $fax = str_replace('*', '%', $fax);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::FAX, $fax, $comparison);
    }

    /**
     * Filter the query on the mail column
     *
     * Example usage:
     * <code>
     * $query->filterByMail('fooValue');   // WHERE mail = 'fooValue'
     * $query->filterByMail('%fooValue%'); // WHERE mail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByMail($mail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mail)) {
                $mail = str_replace('*', '%', $mail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::MAIL, $mail, $comparison);
    }

    /**
     * Filter the query on the pays column
     *
     * Example usage:
     * <code>
     * $query->filterByPays('fooValue');   // WHERE pays = 'fooValue'
     * $query->filterByPays('%fooValue%'); // WHERE pays LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pays The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonServicePeer::PAYS, $pays, $comparison);
    }

    /**
     * Filter the query on the id_initial column
     *
     * Example usage:
     * <code>
     * $query->filterByIdInitial(1234); // WHERE id_initial = 1234
     * $query->filterByIdInitial(array(12, 34)); // WHERE id_initial IN (12, 34)
     * $query->filterByIdInitial(array('min' => 12)); // WHERE id_initial >= 12
     * $query->filterByIdInitial(array('max' => 12)); // WHERE id_initial <= 12
     * </code>
     *
     * @param     mixed $idInitial The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByIdInitial($idInitial = null, $comparison = null)
    {
        if (is_array($idInitial)) {
            $useMinMax = false;
            if (isset($idInitial['min'])) {
                $this->addUsingAlias(CommonServicePeer::ID_INITIAL, $idInitial['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInitial['max'])) {
                $this->addUsingAlias(CommonServicePeer::ID_INITIAL, $idInitial['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::ID_INITIAL, $idInitial, $comparison);
    }

    /**
     * Filter the query on the date_creation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreation('fooValue');   // WHERE date_creation = 'fooValue'
     * $query->filterByDateCreation('%fooValue%'); // WHERE date_creation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateCreation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByDateCreation($dateCreation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateCreation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateCreation)) {
                $dateCreation = str_replace('*', '%', $dateCreation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::DATE_CREATION, $dateCreation, $comparison);
    }

    /**
     * Filter the query on the date_modification column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModification('fooValue');   // WHERE date_modification = 'fooValue'
     * $query->filterByDateModification('%fooValue%'); // WHERE date_modification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateModification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByDateModification($dateModification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateModification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateModification)) {
                $dateModification = str_replace('*', '%', $dateModification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::DATE_MODIFICATION, $dateModification, $comparison);
    }

    /**
     * Filter the query on the siren column
     *
     * Example usage:
     * <code>
     * $query->filterBySiren('fooValue');   // WHERE siren = 'fooValue'
     * $query->filterBySiren('%fooValue%'); // WHERE siren LIKE '%fooValue%'
     * </code>
     *
     * @param     string $siren The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterBySiren($siren = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($siren)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $siren)) {
                $siren = str_replace('*', '%', $siren);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::SIREN, $siren, $comparison);
    }

    /**
     * Filter the query on the complement column
     *
     * Example usage:
     * <code>
     * $query->filterByComplement('fooValue');   // WHERE complement = 'fooValue'
     * $query->filterByComplement('%fooValue%'); // WHERE complement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $complement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByComplement($complement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($complement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $complement)) {
                $complement = str_replace('*', '%', $complement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::COMPLEMENT, $complement, $comparison);
    }

    /**
     * Filter the query on the libelle_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleAr('fooValue');   // WHERE libelle_ar = 'fooValue'
     * $query->filterByLibelleAr('%fooValue%'); // WHERE libelle_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByLibelleAr($libelleAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleAr)) {
                $libelleAr = str_replace('*', '%', $libelleAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::LIBELLE_AR, $libelleAr, $comparison);
    }

    /**
     * Filter the query on the adresse_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseAr('fooValue');   // WHERE adresse_ar = 'fooValue'
     * $query->filterByAdresseAr('%fooValue%'); // WHERE adresse_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByAdresseAr($adresseAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseAr)) {
                $adresseAr = str_replace('*', '%', $adresseAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::ADRESSE_AR, $adresseAr, $comparison);
    }

    /**
     * Filter the query on the adresse_suite_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseSuiteAr('fooValue');   // WHERE adresse_suite_ar = 'fooValue'
     * $query->filterByAdresseSuiteAr('%fooValue%'); // WHERE adresse_suite_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseSuiteAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByAdresseSuiteAr($adresseSuiteAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseSuiteAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseSuiteAr)) {
                $adresseSuiteAr = str_replace('*', '%', $adresseSuiteAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::ADRESSE_SUITE_AR, $adresseSuiteAr, $comparison);
    }

    /**
     * Filter the query on the ville_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByVilleAr('fooValue');   // WHERE ville_ar = 'fooValue'
     * $query->filterByVilleAr('%fooValue%'); // WHERE ville_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $villeAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByVilleAr($villeAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($villeAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $villeAr)) {
                $villeAr = str_replace('*', '%', $villeAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::VILLE_AR, $villeAr, $comparison);
    }

    /**
     * Filter the query on the pays_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByPaysAr('fooValue');   // WHERE pays_ar = 'fooValue'
     * $query->filterByPaysAr('%fooValue%'); // WHERE pays_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paysAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByPaysAr($paysAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paysAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paysAr)) {
                $paysAr = str_replace('*', '%', $paysAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::PAYS_AR, $paysAr, $comparison);
    }

    /**
     * Filter the query on the libelle_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleFr('fooValue');   // WHERE libelle_fr = 'fooValue'
     * $query->filterByLibelleFr('%fooValue%'); // WHERE libelle_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByLibelleFr($libelleFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleFr)) {
                $libelleFr = str_replace('*', '%', $libelleFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::LIBELLE_FR, $libelleFr, $comparison);
    }

    /**
     * Filter the query on the adresse_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseFr('fooValue');   // WHERE adresse_fr = 'fooValue'
     * $query->filterByAdresseFr('%fooValue%'); // WHERE adresse_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByAdresseFr($adresseFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseFr)) {
                $adresseFr = str_replace('*', '%', $adresseFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::ADRESSE_FR, $adresseFr, $comparison);
    }

    /**
     * Filter the query on the adresse_suite_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseSuiteFr('fooValue');   // WHERE adresse_suite_fr = 'fooValue'
     * $query->filterByAdresseSuiteFr('%fooValue%'); // WHERE adresse_suite_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseSuiteFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByAdresseSuiteFr($adresseSuiteFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseSuiteFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseSuiteFr)) {
                $adresseSuiteFr = str_replace('*', '%', $adresseSuiteFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::ADRESSE_SUITE_FR, $adresseSuiteFr, $comparison);
    }

    /**
     * Filter the query on the ville_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByVilleFr('fooValue');   // WHERE ville_fr = 'fooValue'
     * $query->filterByVilleFr('%fooValue%'); // WHERE ville_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $villeFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByVilleFr($villeFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($villeFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $villeFr)) {
                $villeFr = str_replace('*', '%', $villeFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::VILLE_FR, $villeFr, $comparison);
    }

    /**
     * Filter the query on the pays_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByPaysFr('fooValue');   // WHERE pays_fr = 'fooValue'
     * $query->filterByPaysFr('%fooValue%'); // WHERE pays_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paysFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByPaysFr($paysFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paysFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paysFr)) {
                $paysFr = str_replace('*', '%', $paysFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::PAYS_FR, $paysFr, $comparison);
    }

    /**
     * Filter the query on the libelle_es column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleEs('fooValue');   // WHERE libelle_es = 'fooValue'
     * $query->filterByLibelleEs('%fooValue%'); // WHERE libelle_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByLibelleEs($libelleEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleEs)) {
                $libelleEs = str_replace('*', '%', $libelleEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::LIBELLE_ES, $libelleEs, $comparison);
    }

    /**
     * Filter the query on the adresse_es column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseEs('fooValue');   // WHERE adresse_es = 'fooValue'
     * $query->filterByAdresseEs('%fooValue%'); // WHERE adresse_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByAdresseEs($adresseEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseEs)) {
                $adresseEs = str_replace('*', '%', $adresseEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::ADRESSE_ES, $adresseEs, $comparison);
    }

    /**
     * Filter the query on the adresse_suite_es column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseSuiteEs('fooValue');   // WHERE adresse_suite_es = 'fooValue'
     * $query->filterByAdresseSuiteEs('%fooValue%'); // WHERE adresse_suite_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseSuiteEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByAdresseSuiteEs($adresseSuiteEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseSuiteEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseSuiteEs)) {
                $adresseSuiteEs = str_replace('*', '%', $adresseSuiteEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::ADRESSE_SUITE_ES, $adresseSuiteEs, $comparison);
    }

    /**
     * Filter the query on the ville_es column
     *
     * Example usage:
     * <code>
     * $query->filterByVilleEs('fooValue');   // WHERE ville_es = 'fooValue'
     * $query->filterByVilleEs('%fooValue%'); // WHERE ville_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $villeEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByVilleEs($villeEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($villeEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $villeEs)) {
                $villeEs = str_replace('*', '%', $villeEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::VILLE_ES, $villeEs, $comparison);
    }

    /**
     * Filter the query on the pays_es column
     *
     * Example usage:
     * <code>
     * $query->filterByPaysEs('fooValue');   // WHERE pays_es = 'fooValue'
     * $query->filterByPaysEs('%fooValue%'); // WHERE pays_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paysEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByPaysEs($paysEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paysEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paysEs)) {
                $paysEs = str_replace('*', '%', $paysEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::PAYS_ES, $paysEs, $comparison);
    }

    /**
     * Filter the query on the libelle_en column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleEn('fooValue');   // WHERE libelle_en = 'fooValue'
     * $query->filterByLibelleEn('%fooValue%'); // WHERE libelle_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByLibelleEn($libelleEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleEn)) {
                $libelleEn = str_replace('*', '%', $libelleEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::LIBELLE_EN, $libelleEn, $comparison);
    }

    /**
     * Filter the query on the adresse_en column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseEn('fooValue');   // WHERE adresse_en = 'fooValue'
     * $query->filterByAdresseEn('%fooValue%'); // WHERE adresse_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByAdresseEn($adresseEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseEn)) {
                $adresseEn = str_replace('*', '%', $adresseEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::ADRESSE_EN, $adresseEn, $comparison);
    }

    /**
     * Filter the query on the adresse_suite_en column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseSuiteEn('fooValue');   // WHERE adresse_suite_en = 'fooValue'
     * $query->filterByAdresseSuiteEn('%fooValue%'); // WHERE adresse_suite_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseSuiteEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByAdresseSuiteEn($adresseSuiteEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseSuiteEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseSuiteEn)) {
                $adresseSuiteEn = str_replace('*', '%', $adresseSuiteEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::ADRESSE_SUITE_EN, $adresseSuiteEn, $comparison);
    }

    /**
     * Filter the query on the ville_en column
     *
     * Example usage:
     * <code>
     * $query->filterByVilleEn('fooValue');   // WHERE ville_en = 'fooValue'
     * $query->filterByVilleEn('%fooValue%'); // WHERE ville_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $villeEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByVilleEn($villeEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($villeEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $villeEn)) {
                $villeEn = str_replace('*', '%', $villeEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::VILLE_EN, $villeEn, $comparison);
    }

    /**
     * Filter the query on the pays_en column
     *
     * Example usage:
     * <code>
     * $query->filterByPaysEn('fooValue');   // WHERE pays_en = 'fooValue'
     * $query->filterByPaysEn('%fooValue%'); // WHERE pays_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paysEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByPaysEn($paysEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paysEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paysEn)) {
                $paysEn = str_replace('*', '%', $paysEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::PAYS_EN, $paysEn, $comparison);
    }

    /**
     * Filter the query on the libelle_su column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleSu('fooValue');   // WHERE libelle_su = 'fooValue'
     * $query->filterByLibelleSu('%fooValue%'); // WHERE libelle_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByLibelleSu($libelleSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleSu)) {
                $libelleSu = str_replace('*', '%', $libelleSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::LIBELLE_SU, $libelleSu, $comparison);
    }

    /**
     * Filter the query on the adresse_su column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseSu('fooValue');   // WHERE adresse_su = 'fooValue'
     * $query->filterByAdresseSu('%fooValue%'); // WHERE adresse_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByAdresseSu($adresseSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseSu)) {
                $adresseSu = str_replace('*', '%', $adresseSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::ADRESSE_SU, $adresseSu, $comparison);
    }

    /**
     * Filter the query on the adresse_suite_su column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseSuiteSu('fooValue');   // WHERE adresse_suite_su = 'fooValue'
     * $query->filterByAdresseSuiteSu('%fooValue%'); // WHERE adresse_suite_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseSuiteSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByAdresseSuiteSu($adresseSuiteSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseSuiteSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseSuiteSu)) {
                $adresseSuiteSu = str_replace('*', '%', $adresseSuiteSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::ADRESSE_SUITE_SU, $adresseSuiteSu, $comparison);
    }

    /**
     * Filter the query on the ville_su column
     *
     * Example usage:
     * <code>
     * $query->filterByVilleSu('fooValue');   // WHERE ville_su = 'fooValue'
     * $query->filterByVilleSu('%fooValue%'); // WHERE ville_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $villeSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByVilleSu($villeSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($villeSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $villeSu)) {
                $villeSu = str_replace('*', '%', $villeSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::VILLE_SU, $villeSu, $comparison);
    }

    /**
     * Filter the query on the pays_su column
     *
     * Example usage:
     * <code>
     * $query->filterByPaysSu('fooValue');   // WHERE pays_su = 'fooValue'
     * $query->filterByPaysSu('%fooValue%'); // WHERE pays_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paysSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByPaysSu($paysSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paysSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paysSu)) {
                $paysSu = str_replace('*', '%', $paysSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::PAYS_SU, $paysSu, $comparison);
    }

    /**
     * Filter the query on the libelle_du column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleDu('fooValue');   // WHERE libelle_du = 'fooValue'
     * $query->filterByLibelleDu('%fooValue%'); // WHERE libelle_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByLibelleDu($libelleDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleDu)) {
                $libelleDu = str_replace('*', '%', $libelleDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::LIBELLE_DU, $libelleDu, $comparison);
    }

    /**
     * Filter the query on the adresse_du column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseDu('fooValue');   // WHERE adresse_du = 'fooValue'
     * $query->filterByAdresseDu('%fooValue%'); // WHERE adresse_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByAdresseDu($adresseDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseDu)) {
                $adresseDu = str_replace('*', '%', $adresseDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::ADRESSE_DU, $adresseDu, $comparison);
    }

    /**
     * Filter the query on the adresse_suite_du column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseSuiteDu('fooValue');   // WHERE adresse_suite_du = 'fooValue'
     * $query->filterByAdresseSuiteDu('%fooValue%'); // WHERE adresse_suite_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseSuiteDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByAdresseSuiteDu($adresseSuiteDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseSuiteDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseSuiteDu)) {
                $adresseSuiteDu = str_replace('*', '%', $adresseSuiteDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::ADRESSE_SUITE_DU, $adresseSuiteDu, $comparison);
    }

    /**
     * Filter the query on the ville_du column
     *
     * Example usage:
     * <code>
     * $query->filterByVilleDu('fooValue');   // WHERE ville_du = 'fooValue'
     * $query->filterByVilleDu('%fooValue%'); // WHERE ville_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $villeDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByVilleDu($villeDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($villeDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $villeDu)) {
                $villeDu = str_replace('*', '%', $villeDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::VILLE_DU, $villeDu, $comparison);
    }

    /**
     * Filter the query on the pays_du column
     *
     * Example usage:
     * <code>
     * $query->filterByPaysDu('fooValue');   // WHERE pays_du = 'fooValue'
     * $query->filterByPaysDu('%fooValue%'); // WHERE pays_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paysDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByPaysDu($paysDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paysDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paysDu)) {
                $paysDu = str_replace('*', '%', $paysDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::PAYS_DU, $paysDu, $comparison);
    }

    /**
     * Filter the query on the libelle_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleCz('fooValue');   // WHERE libelle_cz = 'fooValue'
     * $query->filterByLibelleCz('%fooValue%'); // WHERE libelle_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByLibelleCz($libelleCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleCz)) {
                $libelleCz = str_replace('*', '%', $libelleCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::LIBELLE_CZ, $libelleCz, $comparison);
    }

    /**
     * Filter the query on the adresse_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseCz('fooValue');   // WHERE adresse_cz = 'fooValue'
     * $query->filterByAdresseCz('%fooValue%'); // WHERE adresse_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByAdresseCz($adresseCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseCz)) {
                $adresseCz = str_replace('*', '%', $adresseCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::ADRESSE_CZ, $adresseCz, $comparison);
    }

    /**
     * Filter the query on the adresse_suite_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseSuiteCz('fooValue');   // WHERE adresse_suite_cz = 'fooValue'
     * $query->filterByAdresseSuiteCz('%fooValue%'); // WHERE adresse_suite_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseSuiteCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByAdresseSuiteCz($adresseSuiteCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseSuiteCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseSuiteCz)) {
                $adresseSuiteCz = str_replace('*', '%', $adresseSuiteCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::ADRESSE_SUITE_CZ, $adresseSuiteCz, $comparison);
    }

    /**
     * Filter the query on the ville_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByVilleCz('fooValue');   // WHERE ville_cz = 'fooValue'
     * $query->filterByVilleCz('%fooValue%'); // WHERE ville_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $villeCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByVilleCz($villeCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($villeCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $villeCz)) {
                $villeCz = str_replace('*', '%', $villeCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::VILLE_CZ, $villeCz, $comparison);
    }

    /**
     * Filter the query on the pays_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByPaysCz('fooValue');   // WHERE pays_cz = 'fooValue'
     * $query->filterByPaysCz('%fooValue%'); // WHERE pays_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paysCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByPaysCz($paysCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paysCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paysCz)) {
                $paysCz = str_replace('*', '%', $paysCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::PAYS_CZ, $paysCz, $comparison);
    }

    /**
     * Filter the query on the libelle_it column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleIt('fooValue');   // WHERE libelle_it = 'fooValue'
     * $query->filterByLibelleIt('%fooValue%'); // WHERE libelle_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByLibelleIt($libelleIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleIt)) {
                $libelleIt = str_replace('*', '%', $libelleIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::LIBELLE_IT, $libelleIt, $comparison);
    }

    /**
     * Filter the query on the adresse_it column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseIt('fooValue');   // WHERE adresse_it = 'fooValue'
     * $query->filterByAdresseIt('%fooValue%'); // WHERE adresse_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByAdresseIt($adresseIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseIt)) {
                $adresseIt = str_replace('*', '%', $adresseIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::ADRESSE_IT, $adresseIt, $comparison);
    }

    /**
     * Filter the query on the adresse_suite_it column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseSuiteIt('fooValue');   // WHERE adresse_suite_it = 'fooValue'
     * $query->filterByAdresseSuiteIt('%fooValue%'); // WHERE adresse_suite_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseSuiteIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByAdresseSuiteIt($adresseSuiteIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseSuiteIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseSuiteIt)) {
                $adresseSuiteIt = str_replace('*', '%', $adresseSuiteIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::ADRESSE_SUITE_IT, $adresseSuiteIt, $comparison);
    }

    /**
     * Filter the query on the ville_it column
     *
     * Example usage:
     * <code>
     * $query->filterByVilleIt('fooValue');   // WHERE ville_it = 'fooValue'
     * $query->filterByVilleIt('%fooValue%'); // WHERE ville_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $villeIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByVilleIt($villeIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($villeIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $villeIt)) {
                $villeIt = str_replace('*', '%', $villeIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::VILLE_IT, $villeIt, $comparison);
    }

    /**
     * Filter the query on the pays_it column
     *
     * Example usage:
     * <code>
     * $query->filterByPaysIt('fooValue');   // WHERE pays_it = 'fooValue'
     * $query->filterByPaysIt('%fooValue%'); // WHERE pays_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paysIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByPaysIt($paysIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paysIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paysIt)) {
                $paysIt = str_replace('*', '%', $paysIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::PAYS_IT, $paysIt, $comparison);
    }

    /**
     * Filter the query on the chemin_complet column
     *
     * Example usage:
     * <code>
     * $query->filterByCheminComplet('fooValue');   // WHERE chemin_complet = 'fooValue'
     * $query->filterByCheminComplet('%fooValue%'); // WHERE chemin_complet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cheminComplet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByCheminComplet($cheminComplet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cheminComplet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cheminComplet)) {
                $cheminComplet = str_replace('*', '%', $cheminComplet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::CHEMIN_COMPLET, $cheminComplet, $comparison);
    }

    /**
     * Filter the query on the chemin_complet_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByCheminCompletFr('fooValue');   // WHERE chemin_complet_fr = 'fooValue'
     * $query->filterByCheminCompletFr('%fooValue%'); // WHERE chemin_complet_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cheminCompletFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByCheminCompletFr($cheminCompletFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cheminCompletFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cheminCompletFr)) {
                $cheminCompletFr = str_replace('*', '%', $cheminCompletFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::CHEMIN_COMPLET_FR, $cheminCompletFr, $comparison);
    }

    /**
     * Filter the query on the chemin_complet_en column
     *
     * Example usage:
     * <code>
     * $query->filterByCheminCompletEn('fooValue');   // WHERE chemin_complet_en = 'fooValue'
     * $query->filterByCheminCompletEn('%fooValue%'); // WHERE chemin_complet_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cheminCompletEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByCheminCompletEn($cheminCompletEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cheminCompletEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cheminCompletEn)) {
                $cheminCompletEn = str_replace('*', '%', $cheminCompletEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::CHEMIN_COMPLET_EN, $cheminCompletEn, $comparison);
    }

    /**
     * Filter the query on the chemin_complet_es column
     *
     * Example usage:
     * <code>
     * $query->filterByCheminCompletEs('fooValue');   // WHERE chemin_complet_es = 'fooValue'
     * $query->filterByCheminCompletEs('%fooValue%'); // WHERE chemin_complet_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cheminCompletEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByCheminCompletEs($cheminCompletEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cheminCompletEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cheminCompletEs)) {
                $cheminCompletEs = str_replace('*', '%', $cheminCompletEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::CHEMIN_COMPLET_ES, $cheminCompletEs, $comparison);
    }

    /**
     * Filter the query on the chemin_complet_su column
     *
     * Example usage:
     * <code>
     * $query->filterByCheminCompletSu('fooValue');   // WHERE chemin_complet_su = 'fooValue'
     * $query->filterByCheminCompletSu('%fooValue%'); // WHERE chemin_complet_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cheminCompletSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByCheminCompletSu($cheminCompletSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cheminCompletSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cheminCompletSu)) {
                $cheminCompletSu = str_replace('*', '%', $cheminCompletSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::CHEMIN_COMPLET_SU, $cheminCompletSu, $comparison);
    }

    /**
     * Filter the query on the chemin_complet_du column
     *
     * Example usage:
     * <code>
     * $query->filterByCheminCompletDu('fooValue');   // WHERE chemin_complet_du = 'fooValue'
     * $query->filterByCheminCompletDu('%fooValue%'); // WHERE chemin_complet_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cheminCompletDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByCheminCompletDu($cheminCompletDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cheminCompletDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cheminCompletDu)) {
                $cheminCompletDu = str_replace('*', '%', $cheminCompletDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::CHEMIN_COMPLET_DU, $cheminCompletDu, $comparison);
    }

    /**
     * Filter the query on the chemin_complet_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByCheminCompletCz('fooValue');   // WHERE chemin_complet_cz = 'fooValue'
     * $query->filterByCheminCompletCz('%fooValue%'); // WHERE chemin_complet_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cheminCompletCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByCheminCompletCz($cheminCompletCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cheminCompletCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cheminCompletCz)) {
                $cheminCompletCz = str_replace('*', '%', $cheminCompletCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::CHEMIN_COMPLET_CZ, $cheminCompletCz, $comparison);
    }

    /**
     * Filter the query on the chemin_complet_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByCheminCompletAr('fooValue');   // WHERE chemin_complet_ar = 'fooValue'
     * $query->filterByCheminCompletAr('%fooValue%'); // WHERE chemin_complet_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cheminCompletAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByCheminCompletAr($cheminCompletAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cheminCompletAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cheminCompletAr)) {
                $cheminCompletAr = str_replace('*', '%', $cheminCompletAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::CHEMIN_COMPLET_AR, $cheminCompletAr, $comparison);
    }

    /**
     * Filter the query on the chemin_complet_it column
     *
     * Example usage:
     * <code>
     * $query->filterByCheminCompletIt('fooValue');   // WHERE chemin_complet_it = 'fooValue'
     * $query->filterByCheminCompletIt('%fooValue%'); // WHERE chemin_complet_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cheminCompletIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByCheminCompletIt($cheminCompletIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cheminCompletIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cheminCompletIt)) {
                $cheminCompletIt = str_replace('*', '%', $cheminCompletIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::CHEMIN_COMPLET_IT, $cheminCompletIt, $comparison);
    }

    /**
     * Filter the query on the nom_service_archiveur column
     *
     * Example usage:
     * <code>
     * $query->filterByNomServiceArchiveur('fooValue');   // WHERE nom_service_archiveur = 'fooValue'
     * $query->filterByNomServiceArchiveur('%fooValue%'); // WHERE nom_service_archiveur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomServiceArchiveur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByNomServiceArchiveur($nomServiceArchiveur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomServiceArchiveur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomServiceArchiveur)) {
                $nomServiceArchiveur = str_replace('*', '%', $nomServiceArchiveur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::NOM_SERVICE_ARCHIVEUR, $nomServiceArchiveur, $comparison);
    }

    /**
     * Filter the query on the identifiant_service_archiveur column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentifiantServiceArchiveur('fooValue');   // WHERE identifiant_service_archiveur = 'fooValue'
     * $query->filterByIdentifiantServiceArchiveur('%fooValue%'); // WHERE identifiant_service_archiveur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $identifiantServiceArchiveur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByIdentifiantServiceArchiveur($identifiantServiceArchiveur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($identifiantServiceArchiveur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $identifiantServiceArchiveur)) {
                $identifiantServiceArchiveur = str_replace('*', '%', $identifiantServiceArchiveur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::IDENTIFIANT_SERVICE_ARCHIVEUR, $identifiantServiceArchiveur, $comparison);
    }

    /**
     * Filter the query on the affichage_service column
     *
     * Example usage:
     * <code>
     * $query->filterByAffichageService('fooValue');   // WHERE affichage_service = 'fooValue'
     * $query->filterByAffichageService('%fooValue%'); // WHERE affichage_service LIKE '%fooValue%'
     * </code>
     *
     * @param     string $affichageService The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByAffichageService($affichageService = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($affichageService)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $affichageService)) {
                $affichageService = str_replace('*', '%', $affichageService);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::AFFICHAGE_SERVICE, $affichageService, $comparison);
    }

    /**
     * Filter the query on the activation_fuseau_horaire column
     *
     * Example usage:
     * <code>
     * $query->filterByActivationFuseauHoraire('fooValue');   // WHERE activation_fuseau_horaire = 'fooValue'
     * $query->filterByActivationFuseauHoraire('%fooValue%'); // WHERE activation_fuseau_horaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $activationFuseauHoraire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByActivationFuseauHoraire($activationFuseauHoraire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($activationFuseauHoraire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $activationFuseauHoraire)) {
                $activationFuseauHoraire = str_replace('*', '%', $activationFuseauHoraire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::ACTIVATION_FUSEAU_HORAIRE, $activationFuseauHoraire, $comparison);
    }

    /**
     * Filter the query on the decalage_horaire column
     *
     * Example usage:
     * <code>
     * $query->filterByDecalageHoraire('fooValue');   // WHERE decalage_horaire = 'fooValue'
     * $query->filterByDecalageHoraire('%fooValue%'); // WHERE decalage_horaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $decalageHoraire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByDecalageHoraire($decalageHoraire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($decalageHoraire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $decalageHoraire)) {
                $decalageHoraire = str_replace('*', '%', $decalageHoraire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::DECALAGE_HORAIRE, $decalageHoraire, $comparison);
    }

    /**
     * Filter the query on the lieu_residence column
     *
     * Example usage:
     * <code>
     * $query->filterByLieuResidence('fooValue');   // WHERE lieu_residence = 'fooValue'
     * $query->filterByLieuResidence('%fooValue%'); // WHERE lieu_residence LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lieuResidence The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByLieuResidence($lieuResidence = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lieuResidence)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lieuResidence)) {
                $lieuResidence = str_replace('*', '%', $lieuResidence);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::LIEU_RESIDENCE, $lieuResidence, $comparison);
    }

    /**
     * Filter the query on the alerte column
     *
     * Example usage:
     * <code>
     * $query->filterByAlerte('fooValue');   // WHERE alerte = 'fooValue'
     * $query->filterByAlerte('%fooValue%'); // WHERE alerte LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alerte The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function filterByAlerte($alerte = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alerte)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $alerte)) {
                $alerte = str_replace('*', '%', $alerte);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServicePeer::ALERTE, $alerte, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonService $commonService Object to remove from the list of results
     *
     * @return CommonServiceQuery The current query, for fluid interface
     */
    public function prune($commonService = null)
    {
        if ($commonService) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonServicePeer::ID), $commonService->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonServicePeer::ORGANISME), $commonService->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
