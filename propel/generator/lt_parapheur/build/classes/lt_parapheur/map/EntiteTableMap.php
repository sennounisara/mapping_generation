<?php



/**
 * This class defines the structure of the 'entite' table.
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
class EntiteTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.EntiteTableMap';

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
        $this->setName('entite');
        $this->setPhpName('Entite');
        $this->setClassname('Entite');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_ENTITE', 'IdEntite', 'INTEGER', true, null, null);
        $this->addColumn('DENOMINATION_FR', 'DenominationFr', 'VARCHAR', false, 255, null);
        $this->addColumn('DENOMINATION_AR', 'DenominationAr', 'VARCHAR', false, 255, null);
        $this->addColumn('ETAT', 'Etat', 'CHAR', false, null, null);
        $this->getColumn('ETAT', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('TYPE_ENTITE', 'TypeEntite', 'CHAR', false, null, null);
        $this->getColumn('TYPE_ENTITE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
  2 => '2',
));
        $this->addColumn('mail', 'Mail', 'VARCHAR', false, 255, null);
        $this->addColumn('telephone', 'Telephone', 'VARCHAR', false, 255, null);
        $this->addColumn('fax', 'Fax', 'VARCHAR', false, 255, null);
        $this->addColumn('adresse', 'Adresse', 'VARCHAR', false, 255, null);
        $this->addColumn('adresse2', 'Adresse2', 'VARCHAR', false, 255, null);
        $this->addColumn('cp', 'Cp', 'VARCHAR', false, 10, null);
        $this->addColumn('ville', 'Ville', 'VARCHAR', false, 255, null);
        $this->addColumn('path_fr', 'PathFr', 'VARCHAR', false, 255, null);
        $this->addColumn('path_ar', 'PathAr', 'VARCHAR', false, 255, null);
        $this->addColumn('ID_REGION', 'IdRegion', 'INTEGER', false, null, null);
        $this->addColumn('ID_PROVINCE', 'IdProvince', 'INTEGER', false, null, null);
        $this->addColumn('ID_COMMUNE', 'IdCommune', 'INTEGER', false, null, null);
        $this->addColumn('COMMUNE', 'Commune', 'VARCHAR', false, 255, null);
        $this->addColumn('ID_PAYS', 'IdPays', 'INTEGER', false, null, null);
        $this->addColumn('SIGLE_FR', 'SigleFr', 'VARCHAR', false, 255, null);
        $this->addColumn('SIGLE_AR', 'SigleAr', 'VARCHAR', false, 255, null);
        $this->addColumn('PATH_SIGLE_FR', 'PathSigleFr', 'VARCHAR', false, 255, null);
        $this->addColumn('PATH_SIGLE_AR', 'PathSigleAr', 'VARCHAR', false, 255, null);
        $this->addColumn('ENTITE_VISIBLE_REQUERANT', 'EntiteVisibleRequerant', 'CHAR', false, null, '0');
        $this->getColumn('ENTITE_VISIBLE_REQUERANT', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ID_ENTITE_RECEPTION', 'IdEntiteReception', 'INTEGER', false, null, null);
        $this->addColumn('NIVEAU', 'Niveau', 'VARCHAR', false, 50, null);
        $this->addColumn('CODE_MIN', 'CodeMin', 'VARCHAR', false, 10, null);
        $this->addColumn('IDS_ENTITE_EN_COPIE', 'IdsEntiteEnCopie', 'VARCHAR', false, 255, null);
        $this->addColumn('NOM_DOMAINE', 'NomDomaine', 'VARCHAR', false, 255, null);
        $this->addColumn('ACRONYME', 'Acronyme', 'VARCHAR', false, 10, null);
        $this->addColumn('SUPPRIME', 'Supprime', 'CHAR', true, null, '0');
        $this->getColumn('SUPPRIME', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ENTITE_TRAITEMENT', 'EntiteTraitement', 'CHAR', true, null, '1');
        $this->getColumn('ENTITE_TRAITEMENT', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ENTITES_AUTORISEES', 'EntitesAutorisees', 'LONGVARCHAR', false, null, null);
        $this->addColumn('CALCUL_ENTITES_AUTORISEES', 'CalculEntitesAutorisees', 'LONGVARCHAR', false, null, null);
        $this->addColumn('ID_ENTITE_AFFECTATION_AUTOMATIQUE', 'IdEntiteAffectationAutomatique', 'INTEGER', false, null, null);
        $this->addColumn('ID_ENTITE_RELANCE', 'IdEntiteRelance', 'INTEGER', false, null, null);
        $this->addColumn('CODE_ENTITE', 'CodeEntite', 'VARCHAR', false, 255, null);
        $this->addColumn('TELEPHONES_CENTRE_APPEL', 'TelephonesCentreAppel', 'VARCHAR', false, 255, null);
        $this->addColumn('HORAIRE_CENTRE_APPEL_AR', 'HoraireCentreAppelAr', 'VARCHAR', false, 500, null);
        $this->addColumn('HORAIRE_CENTRE_APPEL_FR', 'HoraireCentreAppelFr', 'VARCHAR', false, 500, null);
        $this->addColumn('DATE_MODIFICATION', 'DateModification', 'TIMESTAMP', false, null, null);
        $this->addColumn('ID_ENTITE_RECOURS', 'IdEntiteRecours', 'INTEGER', false, null, null);
        $this->addColumn('IDENTIFIANT_ENTITE_RECEPTION_WS', 'IdentifiantEntiteReceptionWs', 'INTEGER', false, null, null);
        $this->addColumn('ID_SOCLE', 'IdSocle', 'INTEGER', false, null, null);
        $this->addColumn('ID_EXTERNE', 'IdExterne', 'INTEGER', false, null, null);
        $this->addColumn('INCREMENT', 'Increment', 'CHAR', true, null, '0');
        $this->getColumn('INCREMENT', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // EntiteTableMap
