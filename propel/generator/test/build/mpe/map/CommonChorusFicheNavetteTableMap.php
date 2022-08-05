<?php



/**
 * This class defines the structure of the 'Chorus_Fiche_Navette' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.mpe.map
 */
class CommonChorusFicheNavetteTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonChorusFicheNavetteTableMap';

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
        $this->setName('Chorus_Fiche_Navette');
        $this->setPhpName('CommonChorusFicheNavette');
        $this->setClassname('CommonChorusFicheNavette');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 10, null);
        $this->addColumn('id_chorus_echange', 'IdChorusEchange', 'VARCHAR', true, 255, '0');
        $this->addColumn('rpa', 'Rpa', 'VARCHAR', false, 255, null);
        $this->addColumn('objet', 'Objet', 'LONGVARCHAR', false, null, null);
        $this->addColumn('fiche_immobilisation', 'FicheImmobilisation', 'CHAR', false, null, null);
        $this->getColumn('fiche_immobilisation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('attente_pj', 'AttentePj', 'CHAR', false, null, null);
        $this->getColumn('attente_pj', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('marche_partage', 'MarchePartage', 'CHAR', false, null, null);
        $this->getColumn('marche_partage', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('id_accord_cadre', 'IdAccordCadre', 'VARCHAR', false, 255, null);
        $this->addColumn('lib_accord_cadre', 'LibAccordCadre', 'VARCHAR', false, 255, null);
        $this->addColumn('annee_creation_accord_cadre', 'AnneeCreationAccordCadre', 'VARCHAR', false, 255, null);
        $this->addColumn('montant_ht', 'MontantHt', 'VARCHAR', false, 255, null);
        $this->addColumn('reconductible', 'Reconductible', 'CHAR', false, null, null);
        $this->getColumn('reconductible', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('visa_accf', 'VisaAccf', 'CHAR', false, null, null);
        $this->getColumn('visa_accf', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('visa_prefet', 'VisaPrefet', 'CHAR', false, null, null);
        $this->getColumn('visa_prefet', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('retenue_garantie', 'RetenueGarantie', 'CHAR', false, null, null);
        $this->getColumn('retenue_garantie', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('montant_mini', 'MontantMini', 'VARCHAR', false, 255, null);
        $this->addColumn('montant_maxi', 'MontantMaxi', 'VARCHAR', false, 255, null);
        $this->addColumn('montant_forfaitaire', 'MontantForfaitaire', 'VARCHAR', false, 255, null);
        $this->addColumn('montant_bc', 'MontantBc', 'VARCHAR', false, 255, null);
        $this->addColumn('taux_tva', 'TauxTva', 'VARCHAR', false, 255, null);
        $this->addColumn('centre_cout', 'CentreCout', 'VARCHAR', false, 255, null);
        $this->addColumn('centre_financier', 'CentreFinancier', 'VARCHAR', false, 255, null);
        $this->addColumn('activite', 'Activite', 'VARCHAR', false, 255, null);
        $this->addColumn('domaine_fonctionnel', 'DomaineFonctionnel', 'VARCHAR', false, 255, null);
        $this->addColumn('fond', 'Fond', 'VARCHAR', false, 255, null);
        $this->addColumn('localisation_interministerielle', 'LocalisationInterministerielle', 'VARCHAR', false, 255, null);
        $this->addColumn('nature', 'Nature', 'VARCHAR', false, 255, null);
        $this->addColumn('axe_ministeriel1', 'AxeMinisteriel1', 'VARCHAR', false, 255, null);
        $this->addColumn('projet_analytique', 'ProjetAnalytique', 'VARCHAR', false, 255, null);
        $this->addColumn('localisation_ministerielle', 'LocalisationMinisterielle', 'VARCHAR', false, 255, null);
        $this->addColumn('axe_ministeriel2', 'AxeMinisteriel2', 'VARCHAR', false, 255, null);
        $this->addColumn('remarques', 'Remarques', 'LONGVARCHAR', false, null, null);
        $this->addColumn('id_document', 'IdDocument', 'INTEGER', false, null, null);
        $this->addColumn('nom_document', 'NomDocument', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonChorusFicheNavetteTableMap
