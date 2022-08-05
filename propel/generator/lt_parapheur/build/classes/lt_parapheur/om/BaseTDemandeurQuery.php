<?php


/**
 * Base class that represents a query for the 't_demandeur' table.
 *
 * 
 *
 * @method TDemandeurQuery orderByIdDemandeur($order = Criteria::ASC) Order by the ID_DEMANDEUR column
 * @method TDemandeurQuery orderByNom($order = Criteria::ASC) Order by the NOM column
 * @method TDemandeurQuery orderByPrenom($order = Criteria::ASC) Order by the PRENOM column
 * @method TDemandeurQuery orderByPrenomFr($order = Criteria::ASC) Order by the PRENOM_FR column
 * @method TDemandeurQuery orderByNomFr($order = Criteria::ASC) Order by the NOM_FR column
 * @method TDemandeurQuery orderByRaisonSociale($order = Criteria::ASC) Order by the RAISON_SOCIALE column
 * @method TDemandeurQuery orderByRaisonSocialeAr($order = Criteria::ASC) Order by the RAISON_SOCIALE_AR column
 * @method TDemandeurQuery orderByTypeRequerant($order = Criteria::ASC) Order by the TYPE_REQUERANT column
 * @method TDemandeurQuery orderByIdentifiantFiscal($order = Criteria::ASC) Order by the IDENTIFIANT_FISCAL column
 * @method TDemandeurQuery orderByOrganisation($order = Criteria::ASC) Order by the ORGANISATION column
 * @method TDemandeurQuery orderByOrganisationAr($order = Criteria::ASC) Order by the ORGANISATION_AR column
 * @method TDemandeurQuery orderByVilleRegistreCommerce($order = Criteria::ASC) Order by the VILLE_REGISTRE_COMMERCE column
 * @method TDemandeurQuery orderByNumeroRegistreCommerce($order = Criteria::ASC) Order by the NUMERO_REGISTRE_COMMERCE column
 * @method TDemandeurQuery orderByAdresse($order = Criteria::ASC) Order by the ADRESSE column
 * @method TDemandeurQuery orderByComplementAdresse($order = Criteria::ASC) Order by the COMPLEMENT_ADRESSE column
 * @method TDemandeurQuery orderByCodePostal($order = Criteria::ASC) Order by the CODE_POSTAL column
 * @method TDemandeurQuery orderByVille($order = Criteria::ASC) Order by the VILLE column
 * @method TDemandeurQuery orderByPays($order = Criteria::ASC) Order by the PAYS column
 * @method TDemandeurQuery orderByEmail($order = Criteria::ASC) Order by the EMAIL column
 * @method TDemandeurQuery orderByMotDePasseDemandeur($order = Criteria::ASC) Order by the MOT_DE_PASSE_DEMANDEUR column
 * @method TDemandeurQuery orderByTelephone($order = Criteria::ASC) Order by the TELEPHONE column
 * @method TDemandeurQuery orderByTelephonePortable($order = Criteria::ASC) Order by the TELEPHONE_PORTABLE column
 * @method TDemandeurQuery orderByNumeroTaxeProfessionnelle($order = Criteria::ASC) Order by the NUMERO_TAXE_PROFESSIONNELLE column
 * @method TDemandeurQuery orderByFax($order = Criteria::ASC) Order by the FAX column
 * @method TDemandeurQuery orderByFaxEntreprise($order = Criteria::ASC) Order by the FAX_ENTREPRISE column
 * @method TDemandeurQuery orderByIce($order = Criteria::ASC) Order by the ICE column
 * @method TDemandeurQuery orderByNumeroCnss($order = Criteria::ASC) Order by the NUMERO_CNSS column
 * @method TDemandeurQuery orderByFonction($order = Criteria::ASC) Order by the FONCTION column
 * @method TDemandeurQuery orderByTelephoneEntreprise($order = Criteria::ASC) Order by the TELEPHONE_ENTREPRISE column
 * @method TDemandeurQuery orderByNumeroPatente($order = Criteria::ASC) Order by the NUMERO_PATENTE column
 * @method TDemandeurQuery orderByEmailEntreprise($order = Criteria::ASC) Order by the EMAIL_ENTREPRISE column
 * @method TDemandeurQuery orderByFormJuridique($order = Criteria::ASC) Order by the FORM_JURIDIQUE column
 * @method TDemandeurQuery orderByIdRegion($order = Criteria::ASC) Order by the ID_REGION column
 * @method TDemandeurQuery orderByValide($order = Criteria::ASC) Order by the VALIDE column
 * @method TDemandeurQuery orderByIdentifiantNational($order = Criteria::ASC) Order by the IDENTIFIANT_NATIONAL column
 * @method TDemandeurQuery orderByTypeEntreprise($order = Criteria::ASC) Order by the TYPE_ENTREPRISE column
 * @method TDemandeurQuery orderByMotifRejet($order = Criteria::ASC) Order by the MOTIF_REJET column
 * @method TDemandeurQuery orderByMotifDesactivation($order = Criteria::ASC) Order by the MOTIF_DESACTIVATION column
 * @method TDemandeurQuery orderByNumeroFournisseur($order = Criteria::ASC) Order by the NUMERO_FOURNISSEUR column
 * @method TDemandeurQuery orderByDateCreation($order = Criteria::ASC) Order by the DATE_CREATION column
 * @method TDemandeurQuery orderByIsConnu($order = Criteria::ASC) Order by the IS_CONNU column
 * @method TDemandeurQuery orderByIdEntiteDemandeur($order = Criteria::ASC) Order by the ID_ENTITE_DEMANDEUR column
 * @method TDemandeurQuery orderByIdExterne($order = Criteria::ASC) Order by the ID_EXTERNE column
 * @method TDemandeurQuery orderByIdEntite($order = Criteria::ASC) Order by the ID_ENTITE column
 * @method TDemandeurQuery orderByAnnulee($order = Criteria::ASC) Order by the ANNULEE column
 * @method TDemandeurQuery orderByIdRemplacant($order = Criteria::ASC) Order by the ID_REMPLACANT column
 * @method TDemandeurQuery orderByIdOrganisme($order = Criteria::ASC) Order by the ID_ORGANISME column
 * @method TDemandeurQuery orderByIdEntiteOrganisme($order = Criteria::ASC) Order by the ID_ENTITE_ORGANISME column
 * @method TDemandeurQuery orderByDateDernierAcces($order = Criteria::ASC) Order by the DATE_DERNIER_ACCES column
 * @method TDemandeurQuery orderByJetonValidation($order = Criteria::ASC) Order by the JETON_VALIDATION column
 * @method TDemandeurQuery orderByStatutEnableAccount($order = Criteria::ASC) Order by the STATUT_ENABLE_ACCOUNT column
 * @method TDemandeurQuery orderByDateTraitement($order = Criteria::ASC) Order by the DATE_TRAITEMENT column
 * @method TDemandeurQuery orderByTokenRecup($order = Criteria::ASC) Order by the TOKEN_RECUP column
 * @method TDemandeurQuery orderByDateExpiration($order = Criteria::ASC) Order by the DATE_EXPIRATION column
 *
 * @method TDemandeurQuery groupByIdDemandeur() Group by the ID_DEMANDEUR column
 * @method TDemandeurQuery groupByNom() Group by the NOM column
 * @method TDemandeurQuery groupByPrenom() Group by the PRENOM column
 * @method TDemandeurQuery groupByPrenomFr() Group by the PRENOM_FR column
 * @method TDemandeurQuery groupByNomFr() Group by the NOM_FR column
 * @method TDemandeurQuery groupByRaisonSociale() Group by the RAISON_SOCIALE column
 * @method TDemandeurQuery groupByRaisonSocialeAr() Group by the RAISON_SOCIALE_AR column
 * @method TDemandeurQuery groupByTypeRequerant() Group by the TYPE_REQUERANT column
 * @method TDemandeurQuery groupByIdentifiantFiscal() Group by the IDENTIFIANT_FISCAL column
 * @method TDemandeurQuery groupByOrganisation() Group by the ORGANISATION column
 * @method TDemandeurQuery groupByOrganisationAr() Group by the ORGANISATION_AR column
 * @method TDemandeurQuery groupByVilleRegistreCommerce() Group by the VILLE_REGISTRE_COMMERCE column
 * @method TDemandeurQuery groupByNumeroRegistreCommerce() Group by the NUMERO_REGISTRE_COMMERCE column
 * @method TDemandeurQuery groupByAdresse() Group by the ADRESSE column
 * @method TDemandeurQuery groupByComplementAdresse() Group by the COMPLEMENT_ADRESSE column
 * @method TDemandeurQuery groupByCodePostal() Group by the CODE_POSTAL column
 * @method TDemandeurQuery groupByVille() Group by the VILLE column
 * @method TDemandeurQuery groupByPays() Group by the PAYS column
 * @method TDemandeurQuery groupByEmail() Group by the EMAIL column
 * @method TDemandeurQuery groupByMotDePasseDemandeur() Group by the MOT_DE_PASSE_DEMANDEUR column
 * @method TDemandeurQuery groupByTelephone() Group by the TELEPHONE column
 * @method TDemandeurQuery groupByTelephonePortable() Group by the TELEPHONE_PORTABLE column
 * @method TDemandeurQuery groupByNumeroTaxeProfessionnelle() Group by the NUMERO_TAXE_PROFESSIONNELLE column
 * @method TDemandeurQuery groupByFax() Group by the FAX column
 * @method TDemandeurQuery groupByFaxEntreprise() Group by the FAX_ENTREPRISE column
 * @method TDemandeurQuery groupByIce() Group by the ICE column
 * @method TDemandeurQuery groupByNumeroCnss() Group by the NUMERO_CNSS column
 * @method TDemandeurQuery groupByFonction() Group by the FONCTION column
 * @method TDemandeurQuery groupByTelephoneEntreprise() Group by the TELEPHONE_ENTREPRISE column
 * @method TDemandeurQuery groupByNumeroPatente() Group by the NUMERO_PATENTE column
 * @method TDemandeurQuery groupByEmailEntreprise() Group by the EMAIL_ENTREPRISE column
 * @method TDemandeurQuery groupByFormJuridique() Group by the FORM_JURIDIQUE column
 * @method TDemandeurQuery groupByIdRegion() Group by the ID_REGION column
 * @method TDemandeurQuery groupByValide() Group by the VALIDE column
 * @method TDemandeurQuery groupByIdentifiantNational() Group by the IDENTIFIANT_NATIONAL column
 * @method TDemandeurQuery groupByTypeEntreprise() Group by the TYPE_ENTREPRISE column
 * @method TDemandeurQuery groupByMotifRejet() Group by the MOTIF_REJET column
 * @method TDemandeurQuery groupByMotifDesactivation() Group by the MOTIF_DESACTIVATION column
 * @method TDemandeurQuery groupByNumeroFournisseur() Group by the NUMERO_FOURNISSEUR column
 * @method TDemandeurQuery groupByDateCreation() Group by the DATE_CREATION column
 * @method TDemandeurQuery groupByIsConnu() Group by the IS_CONNU column
 * @method TDemandeurQuery groupByIdEntiteDemandeur() Group by the ID_ENTITE_DEMANDEUR column
 * @method TDemandeurQuery groupByIdExterne() Group by the ID_EXTERNE column
 * @method TDemandeurQuery groupByIdEntite() Group by the ID_ENTITE column
 * @method TDemandeurQuery groupByAnnulee() Group by the ANNULEE column
 * @method TDemandeurQuery groupByIdRemplacant() Group by the ID_REMPLACANT column
 * @method TDemandeurQuery groupByIdOrganisme() Group by the ID_ORGANISME column
 * @method TDemandeurQuery groupByIdEntiteOrganisme() Group by the ID_ENTITE_ORGANISME column
 * @method TDemandeurQuery groupByDateDernierAcces() Group by the DATE_DERNIER_ACCES column
 * @method TDemandeurQuery groupByJetonValidation() Group by the JETON_VALIDATION column
 * @method TDemandeurQuery groupByStatutEnableAccount() Group by the STATUT_ENABLE_ACCOUNT column
 * @method TDemandeurQuery groupByDateTraitement() Group by the DATE_TRAITEMENT column
 * @method TDemandeurQuery groupByTokenRecup() Group by the TOKEN_RECUP column
 * @method TDemandeurQuery groupByDateExpiration() Group by the DATE_EXPIRATION column
 *
 * @method TDemandeurQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TDemandeurQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TDemandeurQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TDemandeur findOne(PropelPDO $con = null) Return the first TDemandeur matching the query
 * @method TDemandeur findOneOrCreate(PropelPDO $con = null) Return the first TDemandeur matching the query, or a new TDemandeur object populated from the query conditions when no match is found
 *
 * @method TDemandeur findOneByNom(string $NOM) Return the first TDemandeur filtered by the NOM column
 * @method TDemandeur findOneByPrenom(string $PRENOM) Return the first TDemandeur filtered by the PRENOM column
 * @method TDemandeur findOneByPrenomFr(string $PRENOM_FR) Return the first TDemandeur filtered by the PRENOM_FR column
 * @method TDemandeur findOneByNomFr(string $NOM_FR) Return the first TDemandeur filtered by the NOM_FR column
 * @method TDemandeur findOneByRaisonSociale(string $RAISON_SOCIALE) Return the first TDemandeur filtered by the RAISON_SOCIALE column
 * @method TDemandeur findOneByRaisonSocialeAr(string $RAISON_SOCIALE_AR) Return the first TDemandeur filtered by the RAISON_SOCIALE_AR column
 * @method TDemandeur findOneByTypeRequerant(int $TYPE_REQUERANT) Return the first TDemandeur filtered by the TYPE_REQUERANT column
 * @method TDemandeur findOneByIdentifiantFiscal(string $IDENTIFIANT_FISCAL) Return the first TDemandeur filtered by the IDENTIFIANT_FISCAL column
 * @method TDemandeur findOneByOrganisation(string $ORGANISATION) Return the first TDemandeur filtered by the ORGANISATION column
 * @method TDemandeur findOneByOrganisationAr(string $ORGANISATION_AR) Return the first TDemandeur filtered by the ORGANISATION_AR column
 * @method TDemandeur findOneByVilleRegistreCommerce(int $VILLE_REGISTRE_COMMERCE) Return the first TDemandeur filtered by the VILLE_REGISTRE_COMMERCE column
 * @method TDemandeur findOneByNumeroRegistreCommerce(string $NUMERO_REGISTRE_COMMERCE) Return the first TDemandeur filtered by the NUMERO_REGISTRE_COMMERCE column
 * @method TDemandeur findOneByAdresse(string $ADRESSE) Return the first TDemandeur filtered by the ADRESSE column
 * @method TDemandeur findOneByComplementAdresse(string $COMPLEMENT_ADRESSE) Return the first TDemandeur filtered by the COMPLEMENT_ADRESSE column
 * @method TDemandeur findOneByCodePostal(string $CODE_POSTAL) Return the first TDemandeur filtered by the CODE_POSTAL column
 * @method TDemandeur findOneByVille(string $VILLE) Return the first TDemandeur filtered by the VILLE column
 * @method TDemandeur findOneByPays(string $PAYS) Return the first TDemandeur filtered by the PAYS column
 * @method TDemandeur findOneByEmail(string $EMAIL) Return the first TDemandeur filtered by the EMAIL column
 * @method TDemandeur findOneByMotDePasseDemandeur(string $MOT_DE_PASSE_DEMANDEUR) Return the first TDemandeur filtered by the MOT_DE_PASSE_DEMANDEUR column
 * @method TDemandeur findOneByTelephone(string $TELEPHONE) Return the first TDemandeur filtered by the TELEPHONE column
 * @method TDemandeur findOneByTelephonePortable(string $TELEPHONE_PORTABLE) Return the first TDemandeur filtered by the TELEPHONE_PORTABLE column
 * @method TDemandeur findOneByNumeroTaxeProfessionnelle(string $NUMERO_TAXE_PROFESSIONNELLE) Return the first TDemandeur filtered by the NUMERO_TAXE_PROFESSIONNELLE column
 * @method TDemandeur findOneByFax(string $FAX) Return the first TDemandeur filtered by the FAX column
 * @method TDemandeur findOneByFaxEntreprise(string $FAX_ENTREPRISE) Return the first TDemandeur filtered by the FAX_ENTREPRISE column
 * @method TDemandeur findOneByIce(string $ICE) Return the first TDemandeur filtered by the ICE column
 * @method TDemandeur findOneByNumeroCnss(string $NUMERO_CNSS) Return the first TDemandeur filtered by the NUMERO_CNSS column
 * @method TDemandeur findOneByFonction(string $FONCTION) Return the first TDemandeur filtered by the FONCTION column
 * @method TDemandeur findOneByTelephoneEntreprise(string $TELEPHONE_ENTREPRISE) Return the first TDemandeur filtered by the TELEPHONE_ENTREPRISE column
 * @method TDemandeur findOneByNumeroPatente(string $NUMERO_PATENTE) Return the first TDemandeur filtered by the NUMERO_PATENTE column
 * @method TDemandeur findOneByEmailEntreprise(string $EMAIL_ENTREPRISE) Return the first TDemandeur filtered by the EMAIL_ENTREPRISE column
 * @method TDemandeur findOneByFormJuridique(string $FORM_JURIDIQUE) Return the first TDemandeur filtered by the FORM_JURIDIQUE column
 * @method TDemandeur findOneByIdRegion(int $ID_REGION) Return the first TDemandeur filtered by the ID_REGION column
 * @method TDemandeur findOneByValide(string $VALIDE) Return the first TDemandeur filtered by the VALIDE column
 * @method TDemandeur findOneByIdentifiantNational(string $IDENTIFIANT_NATIONAL) Return the first TDemandeur filtered by the IDENTIFIANT_NATIONAL column
 * @method TDemandeur findOneByTypeEntreprise(string $TYPE_ENTREPRISE) Return the first TDemandeur filtered by the TYPE_ENTREPRISE column
 * @method TDemandeur findOneByMotifRejet(string $MOTIF_REJET) Return the first TDemandeur filtered by the MOTIF_REJET column
 * @method TDemandeur findOneByMotifDesactivation(string $MOTIF_DESACTIVATION) Return the first TDemandeur filtered by the MOTIF_DESACTIVATION column
 * @method TDemandeur findOneByNumeroFournisseur(string $NUMERO_FOURNISSEUR) Return the first TDemandeur filtered by the NUMERO_FOURNISSEUR column
 * @method TDemandeur findOneByDateCreation(string $DATE_CREATION) Return the first TDemandeur filtered by the DATE_CREATION column
 * @method TDemandeur findOneByIsConnu(string $IS_CONNU) Return the first TDemandeur filtered by the IS_CONNU column
 * @method TDemandeur findOneByIdEntiteDemandeur(int $ID_ENTITE_DEMANDEUR) Return the first TDemandeur filtered by the ID_ENTITE_DEMANDEUR column
 * @method TDemandeur findOneByIdExterne(int $ID_EXTERNE) Return the first TDemandeur filtered by the ID_EXTERNE column
 * @method TDemandeur findOneByIdEntite(int $ID_ENTITE) Return the first TDemandeur filtered by the ID_ENTITE column
 * @method TDemandeur findOneByAnnulee(string $ANNULEE) Return the first TDemandeur filtered by the ANNULEE column
 * @method TDemandeur findOneByIdRemplacant(int $ID_REMPLACANT) Return the first TDemandeur filtered by the ID_REMPLACANT column
 * @method TDemandeur findOneByIdOrganisme(int $ID_ORGANISME) Return the first TDemandeur filtered by the ID_ORGANISME column
 * @method TDemandeur findOneByIdEntiteOrganisme(int $ID_ENTITE_ORGANISME) Return the first TDemandeur filtered by the ID_ENTITE_ORGANISME column
 * @method TDemandeur findOneByDateDernierAcces(string $DATE_DERNIER_ACCES) Return the first TDemandeur filtered by the DATE_DERNIER_ACCES column
 * @method TDemandeur findOneByJetonValidation(string $JETON_VALIDATION) Return the first TDemandeur filtered by the JETON_VALIDATION column
 * @method TDemandeur findOneByStatutEnableAccount(string $STATUT_ENABLE_ACCOUNT) Return the first TDemandeur filtered by the STATUT_ENABLE_ACCOUNT column
 * @method TDemandeur findOneByDateTraitement(string $DATE_TRAITEMENT) Return the first TDemandeur filtered by the DATE_TRAITEMENT column
 * @method TDemandeur findOneByTokenRecup(string $TOKEN_RECUP) Return the first TDemandeur filtered by the TOKEN_RECUP column
 * @method TDemandeur findOneByDateExpiration(string $DATE_EXPIRATION) Return the first TDemandeur filtered by the DATE_EXPIRATION column
 *
 * @method array findByIdDemandeur(int $ID_DEMANDEUR) Return TDemandeur objects filtered by the ID_DEMANDEUR column
 * @method array findByNom(string $NOM) Return TDemandeur objects filtered by the NOM column
 * @method array findByPrenom(string $PRENOM) Return TDemandeur objects filtered by the PRENOM column
 * @method array findByPrenomFr(string $PRENOM_FR) Return TDemandeur objects filtered by the PRENOM_FR column
 * @method array findByNomFr(string $NOM_FR) Return TDemandeur objects filtered by the NOM_FR column
 * @method array findByRaisonSociale(string $RAISON_SOCIALE) Return TDemandeur objects filtered by the RAISON_SOCIALE column
 * @method array findByRaisonSocialeAr(string $RAISON_SOCIALE_AR) Return TDemandeur objects filtered by the RAISON_SOCIALE_AR column
 * @method array findByTypeRequerant(int $TYPE_REQUERANT) Return TDemandeur objects filtered by the TYPE_REQUERANT column
 * @method array findByIdentifiantFiscal(string $IDENTIFIANT_FISCAL) Return TDemandeur objects filtered by the IDENTIFIANT_FISCAL column
 * @method array findByOrganisation(string $ORGANISATION) Return TDemandeur objects filtered by the ORGANISATION column
 * @method array findByOrganisationAr(string $ORGANISATION_AR) Return TDemandeur objects filtered by the ORGANISATION_AR column
 * @method array findByVilleRegistreCommerce(int $VILLE_REGISTRE_COMMERCE) Return TDemandeur objects filtered by the VILLE_REGISTRE_COMMERCE column
 * @method array findByNumeroRegistreCommerce(string $NUMERO_REGISTRE_COMMERCE) Return TDemandeur objects filtered by the NUMERO_REGISTRE_COMMERCE column
 * @method array findByAdresse(string $ADRESSE) Return TDemandeur objects filtered by the ADRESSE column
 * @method array findByComplementAdresse(string $COMPLEMENT_ADRESSE) Return TDemandeur objects filtered by the COMPLEMENT_ADRESSE column
 * @method array findByCodePostal(string $CODE_POSTAL) Return TDemandeur objects filtered by the CODE_POSTAL column
 * @method array findByVille(string $VILLE) Return TDemandeur objects filtered by the VILLE column
 * @method array findByPays(string $PAYS) Return TDemandeur objects filtered by the PAYS column
 * @method array findByEmail(string $EMAIL) Return TDemandeur objects filtered by the EMAIL column
 * @method array findByMotDePasseDemandeur(string $MOT_DE_PASSE_DEMANDEUR) Return TDemandeur objects filtered by the MOT_DE_PASSE_DEMANDEUR column
 * @method array findByTelephone(string $TELEPHONE) Return TDemandeur objects filtered by the TELEPHONE column
 * @method array findByTelephonePortable(string $TELEPHONE_PORTABLE) Return TDemandeur objects filtered by the TELEPHONE_PORTABLE column
 * @method array findByNumeroTaxeProfessionnelle(string $NUMERO_TAXE_PROFESSIONNELLE) Return TDemandeur objects filtered by the NUMERO_TAXE_PROFESSIONNELLE column
 * @method array findByFax(string $FAX) Return TDemandeur objects filtered by the FAX column
 * @method array findByFaxEntreprise(string $FAX_ENTREPRISE) Return TDemandeur objects filtered by the FAX_ENTREPRISE column
 * @method array findByIce(string $ICE) Return TDemandeur objects filtered by the ICE column
 * @method array findByNumeroCnss(string $NUMERO_CNSS) Return TDemandeur objects filtered by the NUMERO_CNSS column
 * @method array findByFonction(string $FONCTION) Return TDemandeur objects filtered by the FONCTION column
 * @method array findByTelephoneEntreprise(string $TELEPHONE_ENTREPRISE) Return TDemandeur objects filtered by the TELEPHONE_ENTREPRISE column
 * @method array findByNumeroPatente(string $NUMERO_PATENTE) Return TDemandeur objects filtered by the NUMERO_PATENTE column
 * @method array findByEmailEntreprise(string $EMAIL_ENTREPRISE) Return TDemandeur objects filtered by the EMAIL_ENTREPRISE column
 * @method array findByFormJuridique(string $FORM_JURIDIQUE) Return TDemandeur objects filtered by the FORM_JURIDIQUE column
 * @method array findByIdRegion(int $ID_REGION) Return TDemandeur objects filtered by the ID_REGION column
 * @method array findByValide(string $VALIDE) Return TDemandeur objects filtered by the VALIDE column
 * @method array findByIdentifiantNational(string $IDENTIFIANT_NATIONAL) Return TDemandeur objects filtered by the IDENTIFIANT_NATIONAL column
 * @method array findByTypeEntreprise(string $TYPE_ENTREPRISE) Return TDemandeur objects filtered by the TYPE_ENTREPRISE column
 * @method array findByMotifRejet(string $MOTIF_REJET) Return TDemandeur objects filtered by the MOTIF_REJET column
 * @method array findByMotifDesactivation(string $MOTIF_DESACTIVATION) Return TDemandeur objects filtered by the MOTIF_DESACTIVATION column
 * @method array findByNumeroFournisseur(string $NUMERO_FOURNISSEUR) Return TDemandeur objects filtered by the NUMERO_FOURNISSEUR column
 * @method array findByDateCreation(string $DATE_CREATION) Return TDemandeur objects filtered by the DATE_CREATION column
 * @method array findByIsConnu(string $IS_CONNU) Return TDemandeur objects filtered by the IS_CONNU column
 * @method array findByIdEntiteDemandeur(int $ID_ENTITE_DEMANDEUR) Return TDemandeur objects filtered by the ID_ENTITE_DEMANDEUR column
 * @method array findByIdExterne(int $ID_EXTERNE) Return TDemandeur objects filtered by the ID_EXTERNE column
 * @method array findByIdEntite(int $ID_ENTITE) Return TDemandeur objects filtered by the ID_ENTITE column
 * @method array findByAnnulee(string $ANNULEE) Return TDemandeur objects filtered by the ANNULEE column
 * @method array findByIdRemplacant(int $ID_REMPLACANT) Return TDemandeur objects filtered by the ID_REMPLACANT column
 * @method array findByIdOrganisme(int $ID_ORGANISME) Return TDemandeur objects filtered by the ID_ORGANISME column
 * @method array findByIdEntiteOrganisme(int $ID_ENTITE_ORGANISME) Return TDemandeur objects filtered by the ID_ENTITE_ORGANISME column
 * @method array findByDateDernierAcces(string $DATE_DERNIER_ACCES) Return TDemandeur objects filtered by the DATE_DERNIER_ACCES column
 * @method array findByJetonValidation(string $JETON_VALIDATION) Return TDemandeur objects filtered by the JETON_VALIDATION column
 * @method array findByStatutEnableAccount(string $STATUT_ENABLE_ACCOUNT) Return TDemandeur objects filtered by the STATUT_ENABLE_ACCOUNT column
 * @method array findByDateTraitement(string $DATE_TRAITEMENT) Return TDemandeur objects filtered by the DATE_TRAITEMENT column
 * @method array findByTokenRecup(string $TOKEN_RECUP) Return TDemandeur objects filtered by the TOKEN_RECUP column
 * @method array findByDateExpiration(string $DATE_EXPIRATION) Return TDemandeur objects filtered by the DATE_EXPIRATION column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTDemandeurQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTDemandeurQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'TDemandeur', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TDemandeurQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TDemandeurQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TDemandeurQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TDemandeurQuery) {
            return $criteria;
        }
        $query = new TDemandeurQuery();
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
     * @return   TDemandeur|TDemandeur[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TDemandeurPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TDemandeurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TDemandeur A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdDemandeur($key, $con = null)
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
     * @return                 TDemandeur A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_DEMANDEUR`, `NOM`, `PRENOM`, `PRENOM_FR`, `NOM_FR`, `RAISON_SOCIALE`, `RAISON_SOCIALE_AR`, `TYPE_REQUERANT`, `IDENTIFIANT_FISCAL`, `ORGANISATION`, `ORGANISATION_AR`, `VILLE_REGISTRE_COMMERCE`, `NUMERO_REGISTRE_COMMERCE`, `ADRESSE`, `COMPLEMENT_ADRESSE`, `CODE_POSTAL`, `VILLE`, `PAYS`, `EMAIL`, `MOT_DE_PASSE_DEMANDEUR`, `TELEPHONE`, `TELEPHONE_PORTABLE`, `NUMERO_TAXE_PROFESSIONNELLE`, `FAX`, `FAX_ENTREPRISE`, `ICE`, `NUMERO_CNSS`, `FONCTION`, `TELEPHONE_ENTREPRISE`, `NUMERO_PATENTE`, `EMAIL_ENTREPRISE`, `FORM_JURIDIQUE`, `ID_REGION`, `VALIDE`, `IDENTIFIANT_NATIONAL`, `TYPE_ENTREPRISE`, `MOTIF_REJET`, `MOTIF_DESACTIVATION`, `NUMERO_FOURNISSEUR`, `DATE_CREATION`, `IS_CONNU`, `ID_ENTITE_DEMANDEUR`, `ID_EXTERNE`, `ID_ENTITE`, `ANNULEE`, `ID_REMPLACANT`, `ID_ORGANISME`, `ID_ENTITE_ORGANISME`, `DATE_DERNIER_ACCES`, `JETON_VALIDATION`, `STATUT_ENABLE_ACCOUNT`, `DATE_TRAITEMENT`, `TOKEN_RECUP`, `DATE_EXPIRATION` FROM `t_demandeur` WHERE `ID_DEMANDEUR` = :p0';
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
            $obj = new TDemandeur();
            $obj->hydrate($row);
            TDemandeurPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TDemandeur|TDemandeur[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TDemandeur[]|mixed the list of results, formatted by the current formatter
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
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TDemandeurPeer::ID_DEMANDEUR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TDemandeurPeer::ID_DEMANDEUR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_DEMANDEUR column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDemandeur(1234); // WHERE ID_DEMANDEUR = 1234
     * $query->filterByIdDemandeur(array(12, 34)); // WHERE ID_DEMANDEUR IN (12, 34)
     * $query->filterByIdDemandeur(array('min' => 12)); // WHERE ID_DEMANDEUR >= 12
     * $query->filterByIdDemandeur(array('max' => 12)); // WHERE ID_DEMANDEUR <= 12
     * </code>
     *
     * @param     mixed $idDemandeur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByIdDemandeur($idDemandeur = null, $comparison = null)
    {
        if (is_array($idDemandeur)) {
            $useMinMax = false;
            if (isset($idDemandeur['min'])) {
                $this->addUsingAlias(TDemandeurPeer::ID_DEMANDEUR, $idDemandeur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDemandeur['max'])) {
                $this->addUsingAlias(TDemandeurPeer::ID_DEMANDEUR, $idDemandeur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::ID_DEMANDEUR, $idDemandeur, $comparison);
    }

    /**
     * Filter the query on the NOM column
     *
     * Example usage:
     * <code>
     * $query->filterByNom('fooValue');   // WHERE NOM = 'fooValue'
     * $query->filterByNom('%fooValue%'); // WHERE NOM LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByNom($nom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nom)) {
                $nom = str_replace('*', '%', $nom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::NOM, $nom, $comparison);
    }

    /**
     * Filter the query on the PRENOM column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenom('fooValue');   // WHERE PRENOM = 'fooValue'
     * $query->filterByPrenom('%fooValue%'); // WHERE PRENOM LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByPrenom($prenom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenom)) {
                $prenom = str_replace('*', '%', $prenom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::PRENOM, $prenom, $comparison);
    }

    /**
     * Filter the query on the PRENOM_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenomFr('fooValue');   // WHERE PRENOM_FR = 'fooValue'
     * $query->filterByPrenomFr('%fooValue%'); // WHERE PRENOM_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenomFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByPrenomFr($prenomFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenomFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenomFr)) {
                $prenomFr = str_replace('*', '%', $prenomFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::PRENOM_FR, $prenomFr, $comparison);
    }

    /**
     * Filter the query on the NOM_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomFr('fooValue');   // WHERE NOM_FR = 'fooValue'
     * $query->filterByNomFr('%fooValue%'); // WHERE NOM_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByNomFr($nomFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomFr)) {
                $nomFr = str_replace('*', '%', $nomFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::NOM_FR, $nomFr, $comparison);
    }

    /**
     * Filter the query on the RAISON_SOCIALE column
     *
     * Example usage:
     * <code>
     * $query->filterByRaisonSociale('fooValue');   // WHERE RAISON_SOCIALE = 'fooValue'
     * $query->filterByRaisonSociale('%fooValue%'); // WHERE RAISON_SOCIALE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $raisonSociale The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByRaisonSociale($raisonSociale = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($raisonSociale)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $raisonSociale)) {
                $raisonSociale = str_replace('*', '%', $raisonSociale);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::RAISON_SOCIALE, $raisonSociale, $comparison);
    }

    /**
     * Filter the query on the RAISON_SOCIALE_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByRaisonSocialeAr('fooValue');   // WHERE RAISON_SOCIALE_AR = 'fooValue'
     * $query->filterByRaisonSocialeAr('%fooValue%'); // WHERE RAISON_SOCIALE_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $raisonSocialeAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByRaisonSocialeAr($raisonSocialeAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($raisonSocialeAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $raisonSocialeAr)) {
                $raisonSocialeAr = str_replace('*', '%', $raisonSocialeAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::RAISON_SOCIALE_AR, $raisonSocialeAr, $comparison);
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
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByTypeRequerant($typeRequerant = null, $comparison = null)
    {
        if (is_array($typeRequerant)) {
            $useMinMax = false;
            if (isset($typeRequerant['min'])) {
                $this->addUsingAlias(TDemandeurPeer::TYPE_REQUERANT, $typeRequerant['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeRequerant['max'])) {
                $this->addUsingAlias(TDemandeurPeer::TYPE_REQUERANT, $typeRequerant['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::TYPE_REQUERANT, $typeRequerant, $comparison);
    }

    /**
     * Filter the query on the IDENTIFIANT_FISCAL column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentifiantFiscal('fooValue');   // WHERE IDENTIFIANT_FISCAL = 'fooValue'
     * $query->filterByIdentifiantFiscal('%fooValue%'); // WHERE IDENTIFIANT_FISCAL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $identifiantFiscal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByIdentifiantFiscal($identifiantFiscal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($identifiantFiscal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $identifiantFiscal)) {
                $identifiantFiscal = str_replace('*', '%', $identifiantFiscal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::IDENTIFIANT_FISCAL, $identifiantFiscal, $comparison);
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
     * @return TDemandeurQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TDemandeurPeer::ORGANISATION, $organisation, $comparison);
    }

    /**
     * Filter the query on the ORGANISATION_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisationAr('fooValue');   // WHERE ORGANISATION_AR = 'fooValue'
     * $query->filterByOrganisationAr('%fooValue%'); // WHERE ORGANISATION_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisationAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByOrganisationAr($organisationAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisationAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisationAr)) {
                $organisationAr = str_replace('*', '%', $organisationAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::ORGANISATION_AR, $organisationAr, $comparison);
    }

    /**
     * Filter the query on the VILLE_REGISTRE_COMMERCE column
     *
     * Example usage:
     * <code>
     * $query->filterByVilleRegistreCommerce(1234); // WHERE VILLE_REGISTRE_COMMERCE = 1234
     * $query->filterByVilleRegistreCommerce(array(12, 34)); // WHERE VILLE_REGISTRE_COMMERCE IN (12, 34)
     * $query->filterByVilleRegistreCommerce(array('min' => 12)); // WHERE VILLE_REGISTRE_COMMERCE >= 12
     * $query->filterByVilleRegistreCommerce(array('max' => 12)); // WHERE VILLE_REGISTRE_COMMERCE <= 12
     * </code>
     *
     * @param     mixed $villeRegistreCommerce The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByVilleRegistreCommerce($villeRegistreCommerce = null, $comparison = null)
    {
        if (is_array($villeRegistreCommerce)) {
            $useMinMax = false;
            if (isset($villeRegistreCommerce['min'])) {
                $this->addUsingAlias(TDemandeurPeer::VILLE_REGISTRE_COMMERCE, $villeRegistreCommerce['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($villeRegistreCommerce['max'])) {
                $this->addUsingAlias(TDemandeurPeer::VILLE_REGISTRE_COMMERCE, $villeRegistreCommerce['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::VILLE_REGISTRE_COMMERCE, $villeRegistreCommerce, $comparison);
    }

    /**
     * Filter the query on the NUMERO_REGISTRE_COMMERCE column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroRegistreCommerce('fooValue');   // WHERE NUMERO_REGISTRE_COMMERCE = 'fooValue'
     * $query->filterByNumeroRegistreCommerce('%fooValue%'); // WHERE NUMERO_REGISTRE_COMMERCE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroRegistreCommerce The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByNumeroRegistreCommerce($numeroRegistreCommerce = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroRegistreCommerce)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroRegistreCommerce)) {
                $numeroRegistreCommerce = str_replace('*', '%', $numeroRegistreCommerce);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::NUMERO_REGISTRE_COMMERCE, $numeroRegistreCommerce, $comparison);
    }

    /**
     * Filter the query on the ADRESSE column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse('fooValue');   // WHERE ADRESSE = 'fooValue'
     * $query->filterByAdresse('%fooValue%'); // WHERE ADRESSE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TDemandeurPeer::ADRESSE, $adresse, $comparison);
    }

    /**
     * Filter the query on the COMPLEMENT_ADRESSE column
     *
     * Example usage:
     * <code>
     * $query->filterByComplementAdresse('fooValue');   // WHERE COMPLEMENT_ADRESSE = 'fooValue'
     * $query->filterByComplementAdresse('%fooValue%'); // WHERE COMPLEMENT_ADRESSE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $complementAdresse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByComplementAdresse($complementAdresse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($complementAdresse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $complementAdresse)) {
                $complementAdresse = str_replace('*', '%', $complementAdresse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::COMPLEMENT_ADRESSE, $complementAdresse, $comparison);
    }

    /**
     * Filter the query on the CODE_POSTAL column
     *
     * Example usage:
     * <code>
     * $query->filterByCodePostal('fooValue');   // WHERE CODE_POSTAL = 'fooValue'
     * $query->filterByCodePostal('%fooValue%'); // WHERE CODE_POSTAL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codePostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByCodePostal($codePostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codePostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codePostal)) {
                $codePostal = str_replace('*', '%', $codePostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::CODE_POSTAL, $codePostal, $comparison);
    }

    /**
     * Filter the query on the VILLE column
     *
     * Example usage:
     * <code>
     * $query->filterByVille('fooValue');   // WHERE VILLE = 'fooValue'
     * $query->filterByVille('%fooValue%'); // WHERE VILLE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ville The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TDemandeurPeer::VILLE, $ville, $comparison);
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
     * @return TDemandeurQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TDemandeurPeer::PAYS, $pays, $comparison);
    }

    /**
     * Filter the query on the EMAIL column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE EMAIL = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE EMAIL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the MOT_DE_PASSE_DEMANDEUR column
     *
     * Example usage:
     * <code>
     * $query->filterByMotDePasseDemandeur('fooValue');   // WHERE MOT_DE_PASSE_DEMANDEUR = 'fooValue'
     * $query->filterByMotDePasseDemandeur('%fooValue%'); // WHERE MOT_DE_PASSE_DEMANDEUR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $motDePasseDemandeur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByMotDePasseDemandeur($motDePasseDemandeur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($motDePasseDemandeur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $motDePasseDemandeur)) {
                $motDePasseDemandeur = str_replace('*', '%', $motDePasseDemandeur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::MOT_DE_PASSE_DEMANDEUR, $motDePasseDemandeur, $comparison);
    }

    /**
     * Filter the query on the TELEPHONE column
     *
     * Example usage:
     * <code>
     * $query->filterByTelephone('fooValue');   // WHERE TELEPHONE = 'fooValue'
     * $query->filterByTelephone('%fooValue%'); // WHERE TELEPHONE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telephone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TDemandeurPeer::TELEPHONE, $telephone, $comparison);
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
     * @return TDemandeurQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TDemandeurPeer::TELEPHONE_PORTABLE, $telephonePortable, $comparison);
    }

    /**
     * Filter the query on the NUMERO_TAXE_PROFESSIONNELLE column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroTaxeProfessionnelle('fooValue');   // WHERE NUMERO_TAXE_PROFESSIONNELLE = 'fooValue'
     * $query->filterByNumeroTaxeProfessionnelle('%fooValue%'); // WHERE NUMERO_TAXE_PROFESSIONNELLE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroTaxeProfessionnelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByNumeroTaxeProfessionnelle($numeroTaxeProfessionnelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroTaxeProfessionnelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroTaxeProfessionnelle)) {
                $numeroTaxeProfessionnelle = str_replace('*', '%', $numeroTaxeProfessionnelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::NUMERO_TAXE_PROFESSIONNELLE, $numeroTaxeProfessionnelle, $comparison);
    }

    /**
     * Filter the query on the FAX column
     *
     * Example usage:
     * <code>
     * $query->filterByFax('fooValue');   // WHERE FAX = 'fooValue'
     * $query->filterByFax('%fooValue%'); // WHERE FAX LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TDemandeurPeer::FAX, $fax, $comparison);
    }

    /**
     * Filter the query on the FAX_ENTREPRISE column
     *
     * Example usage:
     * <code>
     * $query->filterByFaxEntreprise('fooValue');   // WHERE FAX_ENTREPRISE = 'fooValue'
     * $query->filterByFaxEntreprise('%fooValue%'); // WHERE FAX_ENTREPRISE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $faxEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByFaxEntreprise($faxEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($faxEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $faxEntreprise)) {
                $faxEntreprise = str_replace('*', '%', $faxEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::FAX_ENTREPRISE, $faxEntreprise, $comparison);
    }

    /**
     * Filter the query on the ICE column
     *
     * Example usage:
     * <code>
     * $query->filterByIce('fooValue');   // WHERE ICE = 'fooValue'
     * $query->filterByIce('%fooValue%'); // WHERE ICE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ice The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByIce($ice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ice)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ice)) {
                $ice = str_replace('*', '%', $ice);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::ICE, $ice, $comparison);
    }

    /**
     * Filter the query on the NUMERO_CNSS column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroCnss('fooValue');   // WHERE NUMERO_CNSS = 'fooValue'
     * $query->filterByNumeroCnss('%fooValue%'); // WHERE NUMERO_CNSS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroCnss The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByNumeroCnss($numeroCnss = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroCnss)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroCnss)) {
                $numeroCnss = str_replace('*', '%', $numeroCnss);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::NUMERO_CNSS, $numeroCnss, $comparison);
    }

    /**
     * Filter the query on the FONCTION column
     *
     * Example usage:
     * <code>
     * $query->filterByFonction('fooValue');   // WHERE FONCTION = 'fooValue'
     * $query->filterByFonction('%fooValue%'); // WHERE FONCTION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fonction The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByFonction($fonction = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fonction)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fonction)) {
                $fonction = str_replace('*', '%', $fonction);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::FONCTION, $fonction, $comparison);
    }

    /**
     * Filter the query on the TELEPHONE_ENTREPRISE column
     *
     * Example usage:
     * <code>
     * $query->filterByTelephoneEntreprise('fooValue');   // WHERE TELEPHONE_ENTREPRISE = 'fooValue'
     * $query->filterByTelephoneEntreprise('%fooValue%'); // WHERE TELEPHONE_ENTREPRISE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telephoneEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByTelephoneEntreprise($telephoneEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telephoneEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telephoneEntreprise)) {
                $telephoneEntreprise = str_replace('*', '%', $telephoneEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::TELEPHONE_ENTREPRISE, $telephoneEntreprise, $comparison);
    }

    /**
     * Filter the query on the NUMERO_PATENTE column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroPatente('fooValue');   // WHERE NUMERO_PATENTE = 'fooValue'
     * $query->filterByNumeroPatente('%fooValue%'); // WHERE NUMERO_PATENTE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroPatente The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByNumeroPatente($numeroPatente = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroPatente)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroPatente)) {
                $numeroPatente = str_replace('*', '%', $numeroPatente);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::NUMERO_PATENTE, $numeroPatente, $comparison);
    }

    /**
     * Filter the query on the EMAIL_ENTREPRISE column
     *
     * Example usage:
     * <code>
     * $query->filterByEmailEntreprise('fooValue');   // WHERE EMAIL_ENTREPRISE = 'fooValue'
     * $query->filterByEmailEntreprise('%fooValue%'); // WHERE EMAIL_ENTREPRISE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $emailEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByEmailEntreprise($emailEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($emailEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $emailEntreprise)) {
                $emailEntreprise = str_replace('*', '%', $emailEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::EMAIL_ENTREPRISE, $emailEntreprise, $comparison);
    }

    /**
     * Filter the query on the FORM_JURIDIQUE column
     *
     * Example usage:
     * <code>
     * $query->filterByFormJuridique('fooValue');   // WHERE FORM_JURIDIQUE = 'fooValue'
     * $query->filterByFormJuridique('%fooValue%'); // WHERE FORM_JURIDIQUE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $formJuridique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByFormJuridique($formJuridique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($formJuridique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $formJuridique)) {
                $formJuridique = str_replace('*', '%', $formJuridique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::FORM_JURIDIQUE, $formJuridique, $comparison);
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
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByIdRegion($idRegion = null, $comparison = null)
    {
        if (is_array($idRegion)) {
            $useMinMax = false;
            if (isset($idRegion['min'])) {
                $this->addUsingAlias(TDemandeurPeer::ID_REGION, $idRegion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idRegion['max'])) {
                $this->addUsingAlias(TDemandeurPeer::ID_REGION, $idRegion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::ID_REGION, $idRegion, $comparison);
    }

    /**
     * Filter the query on the VALIDE column
     *
     * Example usage:
     * <code>
     * $query->filterByValide('fooValue');   // WHERE VALIDE = 'fooValue'
     * $query->filterByValide('%fooValue%'); // WHERE VALIDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $valide The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByValide($valide = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($valide)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $valide)) {
                $valide = str_replace('*', '%', $valide);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::VALIDE, $valide, $comparison);
    }

    /**
     * Filter the query on the IDENTIFIANT_NATIONAL column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentifiantNational('fooValue');   // WHERE IDENTIFIANT_NATIONAL = 'fooValue'
     * $query->filterByIdentifiantNational('%fooValue%'); // WHERE IDENTIFIANT_NATIONAL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $identifiantNational The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByIdentifiantNational($identifiantNational = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($identifiantNational)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $identifiantNational)) {
                $identifiantNational = str_replace('*', '%', $identifiantNational);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::IDENTIFIANT_NATIONAL, $identifiantNational, $comparison);
    }

    /**
     * Filter the query on the TYPE_ENTREPRISE column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeEntreprise('fooValue');   // WHERE TYPE_ENTREPRISE = 'fooValue'
     * $query->filterByTypeEntreprise('%fooValue%'); // WHERE TYPE_ENTREPRISE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByTypeEntreprise($typeEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeEntreprise)) {
                $typeEntreprise = str_replace('*', '%', $typeEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::TYPE_ENTREPRISE, $typeEntreprise, $comparison);
    }

    /**
     * Filter the query on the MOTIF_REJET column
     *
     * Example usage:
     * <code>
     * $query->filterByMotifRejet('fooValue');   // WHERE MOTIF_REJET = 'fooValue'
     * $query->filterByMotifRejet('%fooValue%'); // WHERE MOTIF_REJET LIKE '%fooValue%'
     * </code>
     *
     * @param     string $motifRejet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByMotifRejet($motifRejet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($motifRejet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $motifRejet)) {
                $motifRejet = str_replace('*', '%', $motifRejet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::MOTIF_REJET, $motifRejet, $comparison);
    }

    /**
     * Filter the query on the MOTIF_DESACTIVATION column
     *
     * Example usage:
     * <code>
     * $query->filterByMotifDesactivation('fooValue');   // WHERE MOTIF_DESACTIVATION = 'fooValue'
     * $query->filterByMotifDesactivation('%fooValue%'); // WHERE MOTIF_DESACTIVATION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $motifDesactivation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByMotifDesactivation($motifDesactivation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($motifDesactivation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $motifDesactivation)) {
                $motifDesactivation = str_replace('*', '%', $motifDesactivation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::MOTIF_DESACTIVATION, $motifDesactivation, $comparison);
    }

    /**
     * Filter the query on the NUMERO_FOURNISSEUR column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroFournisseur('fooValue');   // WHERE NUMERO_FOURNISSEUR = 'fooValue'
     * $query->filterByNumeroFournisseur('%fooValue%'); // WHERE NUMERO_FOURNISSEUR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroFournisseur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByNumeroFournisseur($numeroFournisseur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroFournisseur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroFournisseur)) {
                $numeroFournisseur = str_replace('*', '%', $numeroFournisseur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::NUMERO_FOURNISSEUR, $numeroFournisseur, $comparison);
    }

    /**
     * Filter the query on the DATE_CREATION column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreation('2011-03-14'); // WHERE DATE_CREATION = '2011-03-14'
     * $query->filterByDateCreation('now'); // WHERE DATE_CREATION = '2011-03-14'
     * $query->filterByDateCreation(array('max' => 'yesterday')); // WHERE DATE_CREATION > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCreation The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByDateCreation($dateCreation = null, $comparison = null)
    {
        if (is_array($dateCreation)) {
            $useMinMax = false;
            if (isset($dateCreation['min'])) {
                $this->addUsingAlias(TDemandeurPeer::DATE_CREATION, $dateCreation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreation['max'])) {
                $this->addUsingAlias(TDemandeurPeer::DATE_CREATION, $dateCreation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::DATE_CREATION, $dateCreation, $comparison);
    }

    /**
     * Filter the query on the IS_CONNU column
     *
     * Example usage:
     * <code>
     * $query->filterByIsConnu('fooValue');   // WHERE IS_CONNU = 'fooValue'
     * $query->filterByIsConnu('%fooValue%'); // WHERE IS_CONNU LIKE '%fooValue%'
     * </code>
     *
     * @param     string $isConnu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByIsConnu($isConnu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($isConnu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $isConnu)) {
                $isConnu = str_replace('*', '%', $isConnu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::IS_CONNU, $isConnu, $comparison);
    }

    /**
     * Filter the query on the ID_ENTITE_DEMANDEUR column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntiteDemandeur(1234); // WHERE ID_ENTITE_DEMANDEUR = 1234
     * $query->filterByIdEntiteDemandeur(array(12, 34)); // WHERE ID_ENTITE_DEMANDEUR IN (12, 34)
     * $query->filterByIdEntiteDemandeur(array('min' => 12)); // WHERE ID_ENTITE_DEMANDEUR >= 12
     * $query->filterByIdEntiteDemandeur(array('max' => 12)); // WHERE ID_ENTITE_DEMANDEUR <= 12
     * </code>
     *
     * @param     mixed $idEntiteDemandeur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByIdEntiteDemandeur($idEntiteDemandeur = null, $comparison = null)
    {
        if (is_array($idEntiteDemandeur)) {
            $useMinMax = false;
            if (isset($idEntiteDemandeur['min'])) {
                $this->addUsingAlias(TDemandeurPeer::ID_ENTITE_DEMANDEUR, $idEntiteDemandeur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntiteDemandeur['max'])) {
                $this->addUsingAlias(TDemandeurPeer::ID_ENTITE_DEMANDEUR, $idEntiteDemandeur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::ID_ENTITE_DEMANDEUR, $idEntiteDemandeur, $comparison);
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
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByIdExterne($idExterne = null, $comparison = null)
    {
        if (is_array($idExterne)) {
            $useMinMax = false;
            if (isset($idExterne['min'])) {
                $this->addUsingAlias(TDemandeurPeer::ID_EXTERNE, $idExterne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idExterne['max'])) {
                $this->addUsingAlias(TDemandeurPeer::ID_EXTERNE, $idExterne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::ID_EXTERNE, $idExterne, $comparison);
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
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByIdEntite($idEntite = null, $comparison = null)
    {
        if (is_array($idEntite)) {
            $useMinMax = false;
            if (isset($idEntite['min'])) {
                $this->addUsingAlias(TDemandeurPeer::ID_ENTITE, $idEntite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntite['max'])) {
                $this->addUsingAlias(TDemandeurPeer::ID_ENTITE, $idEntite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::ID_ENTITE, $idEntite, $comparison);
    }

    /**
     * Filter the query on the ANNULEE column
     *
     * Example usage:
     * <code>
     * $query->filterByAnnulee('fooValue');   // WHERE ANNULEE = 'fooValue'
     * $query->filterByAnnulee('%fooValue%'); // WHERE ANNULEE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $annulee The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByAnnulee($annulee = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($annulee)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $annulee)) {
                $annulee = str_replace('*', '%', $annulee);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::ANNULEE, $annulee, $comparison);
    }

    /**
     * Filter the query on the ID_REMPLACANT column
     *
     * Example usage:
     * <code>
     * $query->filterByIdRemplacant(1234); // WHERE ID_REMPLACANT = 1234
     * $query->filterByIdRemplacant(array(12, 34)); // WHERE ID_REMPLACANT IN (12, 34)
     * $query->filterByIdRemplacant(array('min' => 12)); // WHERE ID_REMPLACANT >= 12
     * $query->filterByIdRemplacant(array('max' => 12)); // WHERE ID_REMPLACANT <= 12
     * </code>
     *
     * @param     mixed $idRemplacant The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByIdRemplacant($idRemplacant = null, $comparison = null)
    {
        if (is_array($idRemplacant)) {
            $useMinMax = false;
            if (isset($idRemplacant['min'])) {
                $this->addUsingAlias(TDemandeurPeer::ID_REMPLACANT, $idRemplacant['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idRemplacant['max'])) {
                $this->addUsingAlias(TDemandeurPeer::ID_REMPLACANT, $idRemplacant['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::ID_REMPLACANT, $idRemplacant, $comparison);
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
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByIdOrganisme($idOrganisme = null, $comparison = null)
    {
        if (is_array($idOrganisme)) {
            $useMinMax = false;
            if (isset($idOrganisme['min'])) {
                $this->addUsingAlias(TDemandeurPeer::ID_ORGANISME, $idOrganisme['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOrganisme['max'])) {
                $this->addUsingAlias(TDemandeurPeer::ID_ORGANISME, $idOrganisme['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::ID_ORGANISME, $idOrganisme, $comparison);
    }

    /**
     * Filter the query on the ID_ENTITE_ORGANISME column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntiteOrganisme(1234); // WHERE ID_ENTITE_ORGANISME = 1234
     * $query->filterByIdEntiteOrganisme(array(12, 34)); // WHERE ID_ENTITE_ORGANISME IN (12, 34)
     * $query->filterByIdEntiteOrganisme(array('min' => 12)); // WHERE ID_ENTITE_ORGANISME >= 12
     * $query->filterByIdEntiteOrganisme(array('max' => 12)); // WHERE ID_ENTITE_ORGANISME <= 12
     * </code>
     *
     * @param     mixed $idEntiteOrganisme The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByIdEntiteOrganisme($idEntiteOrganisme = null, $comparison = null)
    {
        if (is_array($idEntiteOrganisme)) {
            $useMinMax = false;
            if (isset($idEntiteOrganisme['min'])) {
                $this->addUsingAlias(TDemandeurPeer::ID_ENTITE_ORGANISME, $idEntiteOrganisme['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntiteOrganisme['max'])) {
                $this->addUsingAlias(TDemandeurPeer::ID_ENTITE_ORGANISME, $idEntiteOrganisme['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::ID_ENTITE_ORGANISME, $idEntiteOrganisme, $comparison);
    }

    /**
     * Filter the query on the DATE_DERNIER_ACCES column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDernierAcces('2011-03-14'); // WHERE DATE_DERNIER_ACCES = '2011-03-14'
     * $query->filterByDateDernierAcces('now'); // WHERE DATE_DERNIER_ACCES = '2011-03-14'
     * $query->filterByDateDernierAcces(array('max' => 'yesterday')); // WHERE DATE_DERNIER_ACCES > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateDernierAcces The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByDateDernierAcces($dateDernierAcces = null, $comparison = null)
    {
        if (is_array($dateDernierAcces)) {
            $useMinMax = false;
            if (isset($dateDernierAcces['min'])) {
                $this->addUsingAlias(TDemandeurPeer::DATE_DERNIER_ACCES, $dateDernierAcces['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDernierAcces['max'])) {
                $this->addUsingAlias(TDemandeurPeer::DATE_DERNIER_ACCES, $dateDernierAcces['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::DATE_DERNIER_ACCES, $dateDernierAcces, $comparison);
    }

    /**
     * Filter the query on the JETON_VALIDATION column
     *
     * Example usage:
     * <code>
     * $query->filterByJetonValidation('fooValue');   // WHERE JETON_VALIDATION = 'fooValue'
     * $query->filterByJetonValidation('%fooValue%'); // WHERE JETON_VALIDATION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jetonValidation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByJetonValidation($jetonValidation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jetonValidation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jetonValidation)) {
                $jetonValidation = str_replace('*', '%', $jetonValidation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::JETON_VALIDATION, $jetonValidation, $comparison);
    }

    /**
     * Filter the query on the STATUT_ENABLE_ACCOUNT column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutEnableAccount('fooValue');   // WHERE STATUT_ENABLE_ACCOUNT = 'fooValue'
     * $query->filterByStatutEnableAccount('%fooValue%'); // WHERE STATUT_ENABLE_ACCOUNT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statutEnableAccount The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByStatutEnableAccount($statutEnableAccount = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statutEnableAccount)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statutEnableAccount)) {
                $statutEnableAccount = str_replace('*', '%', $statutEnableAccount);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::STATUT_ENABLE_ACCOUNT, $statutEnableAccount, $comparison);
    }

    /**
     * Filter the query on the DATE_TRAITEMENT column
     *
     * Example usage:
     * <code>
     * $query->filterByDateTraitement('2011-03-14'); // WHERE DATE_TRAITEMENT = '2011-03-14'
     * $query->filterByDateTraitement('now'); // WHERE DATE_TRAITEMENT = '2011-03-14'
     * $query->filterByDateTraitement(array('max' => 'yesterday')); // WHERE DATE_TRAITEMENT > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateTraitement The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByDateTraitement($dateTraitement = null, $comparison = null)
    {
        if (is_array($dateTraitement)) {
            $useMinMax = false;
            if (isset($dateTraitement['min'])) {
                $this->addUsingAlias(TDemandeurPeer::DATE_TRAITEMENT, $dateTraitement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateTraitement['max'])) {
                $this->addUsingAlias(TDemandeurPeer::DATE_TRAITEMENT, $dateTraitement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::DATE_TRAITEMENT, $dateTraitement, $comparison);
    }

    /**
     * Filter the query on the TOKEN_RECUP column
     *
     * Example usage:
     * <code>
     * $query->filterByTokenRecup('fooValue');   // WHERE TOKEN_RECUP = 'fooValue'
     * $query->filterByTokenRecup('%fooValue%'); // WHERE TOKEN_RECUP LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tokenRecup The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByTokenRecup($tokenRecup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tokenRecup)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tokenRecup)) {
                $tokenRecup = str_replace('*', '%', $tokenRecup);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::TOKEN_RECUP, $tokenRecup, $comparison);
    }

    /**
     * Filter the query on the DATE_EXPIRATION column
     *
     * Example usage:
     * <code>
     * $query->filterByDateExpiration('2011-03-14'); // WHERE DATE_EXPIRATION = '2011-03-14'
     * $query->filterByDateExpiration('now'); // WHERE DATE_EXPIRATION = '2011-03-14'
     * $query->filterByDateExpiration(array('max' => 'yesterday')); // WHERE DATE_EXPIRATION > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateExpiration The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function filterByDateExpiration($dateExpiration = null, $comparison = null)
    {
        if (is_array($dateExpiration)) {
            $useMinMax = false;
            if (isset($dateExpiration['min'])) {
                $this->addUsingAlias(TDemandeurPeer::DATE_EXPIRATION, $dateExpiration['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateExpiration['max'])) {
                $this->addUsingAlias(TDemandeurPeer::DATE_EXPIRATION, $dateExpiration['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TDemandeurPeer::DATE_EXPIRATION, $dateExpiration, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TDemandeur $tDemandeur Object to remove from the list of results
     *
     * @return TDemandeurQuery The current query, for fluid interface
     */
    public function prune($tDemandeur = null)
    {
        if ($tDemandeur) {
            $this->addUsingAlias(TDemandeurPeer::ID_DEMANDEUR, $tDemandeur->getIdDemandeur(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
