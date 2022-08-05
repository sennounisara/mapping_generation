<?php



/**
 * This class defines the structure of the 't_demandeur' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lt_parapheur.map
 */
class TDemandeurTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.TDemandeurTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('t_demandeur');
        $this->setPhpName('TDemandeur');
        $this->setClassname('TDemandeur');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_DEMANDEUR', 'IdDemandeur', 'INTEGER', true, null, null);
        $this->addColumn('NOM', 'Nom', 'VARCHAR', false, 60, null);
        $this->addColumn('PRENOM', 'Prenom', 'VARCHAR', false, 60, null);
        $this->addColumn('PRENOM_FR', 'PrenomFr', 'VARCHAR', false, 60, null);
        $this->addColumn('NOM_FR', 'NomFr', 'VARCHAR', false, 60, null);
        $this->addColumn('RAISON_SOCIALE', 'RaisonSociale', 'VARCHAR', false, 100, null);
        $this->addColumn('RAISON_SOCIALE_AR', 'RaisonSocialeAr', 'VARCHAR', false, 255, null);
        $this->addColumn('TYPE_REQUERANT', 'TypeRequerant', 'INTEGER', false, null, null);
        $this->addColumn('IDENTIFIANT_FISCAL', 'IdentifiantFiscal', 'VARCHAR', false, 255, null);
        $this->addColumn('ORGANISATION', 'Organisation', 'VARCHAR', false, 255, null);
        $this->addColumn('ORGANISATION_AR', 'OrganisationAr', 'VARCHAR', false, 255, null);
        $this->addColumn('VILLE_REGISTRE_COMMERCE', 'VilleRegistreCommerce', 'INTEGER', false, null, null);
        $this->addColumn('NUMERO_REGISTRE_COMMERCE', 'NumeroRegistreCommerce', 'VARCHAR', false, 10, null);
        $this->addColumn('ADRESSE', 'Adresse', 'VARCHAR', false, 255, null);
        $this->addColumn('COMPLEMENT_ADRESSE', 'ComplementAdresse', 'VARCHAR', false, 255, null);
        $this->addColumn('CODE_POSTAL', 'CodePostal', 'VARCHAR', false, 255, null);
        $this->addColumn('VILLE', 'Ville', 'VARCHAR', false, 255, null);
        $this->addColumn('PAYS', 'Pays', 'VARCHAR', false, 255, null);
        $this->addColumn('EMAIL', 'Email', 'VARCHAR', false, 255, null);
        $this->addColumn('MOT_DE_PASSE_DEMANDEUR', 'MotDePasseDemandeur', 'VARCHAR', false, 255, null);
        $this->addColumn('TELEPHONE', 'Telephone', 'VARCHAR', false, 255, null);
        $this->addColumn('TELEPHONE_PORTABLE', 'TelephonePortable', 'VARCHAR', false, 255, null);
        $this->addColumn('NUMERO_TAXE_PROFESSIONNELLE', 'NumeroTaxeProfessionnelle', 'VARCHAR', false, 255, null);
        $this->addColumn('FAX', 'Fax', 'VARCHAR', false, 20, null);
        $this->addColumn('FAX_ENTREPRISE', 'FaxEntreprise', 'VARCHAR', false, 255, null);
        $this->addColumn('ICE', 'Ice', 'VARCHAR', false, 255, null);
        $this->addColumn('NUMERO_CNSS', 'NumeroCnss', 'VARCHAR', false, 255, null);
        $this->addColumn('FONCTION', 'Fonction', 'VARCHAR', false, 255, null);
        $this->addColumn('TELEPHONE_ENTREPRISE', 'TelephoneEntreprise', 'VARCHAR', false, 255, null);
        $this->addColumn('NUMERO_PATENTE', 'NumeroPatente', 'VARCHAR', false, 255, null);
        $this->addColumn('EMAIL_ENTREPRISE', 'EmailEntreprise', 'VARCHAR', false, 255, null);
        $this->addColumn('FORM_JURIDIQUE', 'FormJuridique', 'VARCHAR', false, 255, null);
        $this->addColumn('ID_REGION', 'IdRegion', 'INTEGER', false, null, null);
        $this->addColumn('VALIDE', 'Valide', 'CHAR', true, null, '0');
        $this->getColumn('VALIDE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
  2 => '2',
));
        $this->addColumn('IDENTIFIANT_NATIONAL', 'IdentifiantNational', 'VARCHAR', false, 255, null);
        $this->addColumn('TYPE_ENTREPRISE', 'TypeEntreprise', 'CHAR', true, null, '0');
        $this->getColumn('TYPE_ENTREPRISE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('MOTIF_REJET', 'MotifRejet', 'LONGVARCHAR', false, null, null);
        $this->addColumn('MOTIF_DESACTIVATION', 'MotifDesactivation', 'LONGVARCHAR', false, null, null);
        $this->addColumn('NUMERO_FOURNISSEUR', 'NumeroFournisseur', 'VARCHAR', false, 255, null);
        $this->addColumn('DATE_CREATION', 'DateCreation', 'TIMESTAMP', false, null, null);
        $this->addColumn('IS_CONNU', 'IsConnu', 'CHAR', true, null, '0');
        $this->getColumn('IS_CONNU', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ID_ENTITE_DEMANDEUR', 'IdEntiteDemandeur', 'INTEGER', false, null, null);
        $this->addColumn('ID_EXTERNE', 'IdExterne', 'INTEGER', false, null, null);
        $this->addColumn('ID_ENTITE', 'IdEntite', 'INTEGER', false, null, null);
        $this->addColumn('ANNULEE', 'Annulee', 'CHAR', true, null, '0');
        $this->getColumn('ANNULEE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ID_REMPLACANT', 'IdRemplacant', 'INTEGER', false, null, null);
        $this->addColumn('ID_ORGANISME', 'IdOrganisme', 'INTEGER', false, null, null);
        $this->addColumn('ID_ENTITE_ORGANISME', 'IdEntiteOrganisme', 'INTEGER', false, null, null);
        $this->addColumn('DATE_DERNIER_ACCES', 'DateDernierAcces', 'TIMESTAMP', false, null, null);
        $this->addColumn('JETON_VALIDATION', 'JetonValidation', 'VARCHAR', false, 255, null);
        $this->addColumn('STATUT_ENABLE_ACCOUNT', 'StatutEnableAccount', 'CHAR', true, null, '0');
        $this->getColumn('STATUT_ENABLE_ACCOUNT', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('DATE_TRAITEMENT', 'DateTraitement', 'TIMESTAMP', false, null, null);
        $this->addColumn('TOKEN_RECUP', 'TokenRecup', 'VARCHAR', false, 255, null);
        $this->addColumn('DATE_EXPIRATION', 'DateExpiration', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // TDemandeurTableMap
