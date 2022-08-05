<?php



/**
 * This class defines the structure of the 't_etape_circuit_validation_demande' table.
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
class TEtapeCircuitValidationDemandeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.TEtapeCircuitValidationDemandeTableMap';

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
        $this->setName('t_etape_circuit_validation_demande');
        $this->setPhpName('TEtapeCircuitValidationDemande');
        $this->setClassname('TEtapeCircuitValidationDemande');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('LIBELLE_ETAPE', 'LibelleEtape', 'VARCHAR', true, 255, null);
        $this->addColumn('LIBELLE_ETAPE_AR', 'LibelleEtapeAr', 'VARCHAR', false, 255, null);
        $this->addColumn('DETAIL', 'Detail', 'VARCHAR', false, 255, null);
        $this->addColumn('NUMERO_ETAPE', 'NumeroEtape', 'INTEGER', true, null, null);
        $this->addColumn('ID_TYPE_ETAPE', 'IdTypeEtape', 'INTEGER', true, null, null);
        $this->addColumn('VISA_SIGNATURE', 'VisaSignature', 'CHAR', false, null, null);
        $this->getColumn('VISA_SIGNATURE', false)->setValueSet(array (
  0 => '1',
  1 => '2',
  2 => '3',
  3 => '4',
));
        $this->addColumn('ID_ENTITE', 'IdEntite', 'INTEGER', false, null, null);
        $this->addColumn('ID_SIGNATAIRE', 'IdSignataire', 'INTEGER', false, null, null);
        $this->addColumn('ACHEVE', 'Acheve', 'CHAR', false, null, '0');
        $this->getColumn('ACHEVE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
  2 => '2',
));
        $this->addColumn('ID_DEMANDE', 'IdDemande', 'INTEGER', true, null, null);
        $this->addColumn('REGLE_VALIDATION', 'RegleValidation', 'LONGVARCHAR', false, null, null);
        $this->addColumn('REGLE_REFUS', 'RegleRefus', 'LONGVARCHAR', false, null, null);
        $this->addColumn('SUPPRIME', 'Supprime', 'CHAR', true, null, '0');
        $this->getColumn('SUPPRIME', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('DELAI_ETAPE', 'DelaiEtape', 'INTEGER', false, null, null);
        $this->addColumn('DELAI_HEURE', 'DelaiHeure', 'INTEGER', false, null, null);
        $this->addColumn('DATE_FIN', 'DateFin', 'TIMESTAMP', false, null, null);
        $this->addColumn('ID_ENTITE_RELANCE', 'IdEntiteRelance', 'INTEGER', false, null, null);
        $this->addColumn('ID_AGENT_RELANCE', 'IdAgentRelance', 'INTEGER', false, null, null);
        $this->addColumn('DUREE_REELLE_TRAITEMENT', 'DureeReelleTraitement', 'INTEGER', false, null, null);
        $this->addColumn('HEURES_REELLE_TRAITEMENT', 'HeuresReelleTraitement', 'FLOAT', false, null, null);
        $this->addColumn('CHECK_LIST_TAB', 'CheckListTab', 'LONGVARCHAR', false, null, null);
        $this->addColumn('CLOTURE', 'Cloture', 'CHAR', true, null, '1');
        $this->getColumn('CLOTURE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('NIVEAU_HIERARCHIE', 'NiveauHierarchie', 'INTEGER', false, null, null);
        $this->addColumn('CALCUL', 'Calcul', 'CHAR', true, null, '0');
        $this->getColumn('CALCUL', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ID_ETAPE_HIERARCHIE', 'IdEtapeHierarchie', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // TEtapeCircuitValidationDemandeTableMap
