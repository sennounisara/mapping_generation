<?php



/**
 * This class defines the structure of the 't_param_dossier_formulaire' table.
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
class CommonTParamDossierFormulaireTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTParamDossierFormulaireTableMap';

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
        $this->setName('t_param_dossier_formulaire');
        $this->setPhpName('CommonTParamDossierFormulaire');
        $this->setClassname('CommonTParamDossierFormulaire');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_param_dossier_formulaire', 'IdParamDossierFormulaire', 'INTEGER', true, null, null);
        $this->addForeignKey('organisme', 'Organisme', 'VARCHAR', 'consultation', 'organisme', true, 30, null);
        $this->addForeignKey('consultation_ref', 'ConsultationRef', 'INTEGER', 'consultation', 'reference', true, null, null);
        $this->addColumn('type_enveloppe', 'TypeEnveloppe', 'INTEGER', true, 1, null);
        $this->addColumn('libelle_formulaire', 'LibelleFormulaire', 'VARCHAR', true, 255, null);
        $this->addColumn('cle_externe_dispositif', 'CleExterneDispositif', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonConsultation', 'CommonConsultation', RelationMap::MANY_TO_ONE, array('organisme' => 'organisme', 'consultation_ref' => 'reference', ), null, null);
    } // buildRelations()

} // CommonTParamDossierFormulaireTableMap
